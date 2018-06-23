<?php 
	session_start();
	include_once 'header.php';
	if (array_key_exists('data', $_SESSION) && !empty($_SESSION['data'])) {
		$data = $_SESSION['data'];
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
		<td>First Name</td>
		<td>Last Name</td>
		<td>E-mail</td>
		<td>Phone</td>
		<td>Address</td>
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
				echo $fieldName['f_name'];
			 ?>
		</td>
		<td>
			<?php 
				echo $fieldName['l_name'];
			 ?>
		</td>
		<td>
			<?php 
				echo $fieldName['email'];
			 ?>
		</td>
		<td>
			<?php 
				echo $fieldName['phone'];
			 ?>
		</td>
		<td>
			<?php 
				echo $fieldName['address'];
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
	 	<td align="center" colspan="7">No data availabel</td>
	 </tr>
	 <?php 
	}
	  ?>
</table>
<?php include_once 'footer.php'; ?>