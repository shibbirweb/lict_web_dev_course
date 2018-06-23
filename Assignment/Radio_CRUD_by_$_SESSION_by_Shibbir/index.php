<?php 
	session_start();
	include_once 'header.php';
	if (array_key_exists('main_data', $_SESSION) && !empty($_SESSION['main_data'])) {
		$data = $_SESSION['main_data'];
		echo "<pre>";
		//print_r($data);
		echo "</pre>";
		//session_unset();
	}
 ?>
<h3><a href="create.php">Click here</a> to create new record</h3>
<?php 
	if (isset($_SESSION['msg'])) {
		echo "<h2>".$_SESSION['msg']."</h2>";
		unset($_SESSION['msg']);
	}
 ?>
<table cellpadding="12" border="1" style="border-collapse: collapse;">
	<tr align="center">
		<td>User ID</td>
		<td>Gender</td>
		<td>Action</td>
	</tr>
	<?php 
		if (isset($data) && !empty($data)) {
			foreach ($data as $id => $fieldName) {
	 ?>
	<tr align="center">
		<td>
			<?php echo $id+1; ?>
		</td>
		<td>
			<?php 
				echo $fieldName['gender'];
			 ?>
		</td>
		<td>
			<a href="show.php?id=<?php echo $id;?>">Show</a> |
			<a href="edit.php?id=<?php echo $id;?>">Edit</a> |
			<a href="delete.php?id=<?php echo $id;?>">Delete</a>
		</td>
	</tr>
	<?php 
			}
		}else{
	 ?>
	 <tr>
	 	<td align="center" colspan="3">No data availabel</td>
	 </tr>
	 <?php 
	}
	  ?>
</table>
<?php include_once 'footer.php'; ?>