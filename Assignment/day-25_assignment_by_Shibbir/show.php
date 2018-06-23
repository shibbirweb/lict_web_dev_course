<?php 
session_start();
include_once 'header.php';
?>
<?php
	if(isset($_GET['id'])){
		if(array_key_exists('session_data', $_SESSION) && !empty($_SESSION['session_data'])){
			$single = $_SESSION['session_data'][$_GET['id']];
		}
?>
<p><a href="index.php">Click here</a> to go list page</p>
<table border="1px" cellpadding="12" style="border-collapse: collapse;">
	<tr>
		<td>Serial</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>E-mail</td>
		<td>Gender</td>
		<td>Phone Number</td>
		<td>Action</td>
	</tr>
	<tr>
		<td><?php echo $_GET['id']+1;?></td>
		<td><?php echo $single['f_name'];?></td>
		<td><?php echo $single['l_name'];?></td>
		<td><?php echo $single['email'];?></td>
		<td><?php echo $single['gender'];?></td>
		<td><?php echo $single['phone'];?></td>
		<td>
			<a href="edit.php?id=<?php echo $_GET['id'];?>">Edit</a> | 
			<a href="delete.php?id=<?php echo $_GET['id'];?>">Delete</a>
		</td>
	</tr>
</table>
<?php
	}else{
		header('location:index.php');
	}
?>
<?php include_once 'footer.php'?>