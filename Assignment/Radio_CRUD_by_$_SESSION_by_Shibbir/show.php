<?php
	session_start(); 
	include_once 'header.php';
	if (isset($_GET['id'])) {
		if (array_key_exists('main_data', $_SESSION) && !empty($_SESSION['main_data'])) {
			$singleData = $_SESSION['main_data'][$_GET['id']];
			echo "<pre>";
			//print_r($singleData);
			echo "</pre>";
		}else{
			header('location:index.php');
		}
	}else{
		header('location:index.php');
	}
 ?>
<table cellpadding="12" border="1" style="border-collapse: collapse;">
	<tr align="center">
		<td>User ID</td>
		<td>Gender</td>
		<td>Action</td>
	</tr>
	<tr align="center">
		<td>
			<?php echo $_GET['id']+1; ?>
		</td>
		<td>
			<?php 
				echo $singleData['gender'];
			 ?>
		</td>
		<td>
			<a href="edit.php?id=<?php echo $_GET['id'];?>">Edit</a> |
			<a href="delete.php?id=<?php echo $_GET['id'];?>">Delete</a>
		</td>
	</tr></table>

<h2><a href="create.php">Click here</a> to create new record</h2>
<h2><a href="index.php">Click here</a> to back to list</h2>



<?php include_once 'footer.php'; ?>