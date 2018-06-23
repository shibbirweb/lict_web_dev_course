<?php
	session_start();
	include_once 'header.php';
	if(array_key_exists('session_data', $_SESSION) AND !empty($_SESSION['session_data'])){
		$allData = $_SESSION['session_data'];
		//session_unset();
	}
?>
<p class="headline">PHP CRUD Assignment ($_SESSION)</p>
	<?php
		if(isset($_SESSION['msg'])){
			echo "<h4>".$_SESSION['msg']."</h4>";
			unset($_SESSION['msg']);
		}
	?>
<p>* Create <a href="create.php">New Record</a></p>
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
<?php
	if(isset($allData) AND !empty($allData)){
		foreach ($allData as $key => $value) {

?>
	<tr>
		<td>
			<?php echo $key+1;?>	
		</td>
		<td>
			<?php
			if (array_key_exists('f_name', $value) && !empty($value['f_name'])) {
			 	echo $value['f_name'];
			 } 
			?>
		</td>
		<td>
			<?php
				if(array_key_exists('l_name', $value) && !empty($value['l_name'])){
					echo $value['l_name'];
				}
			?>
		</td>
		<td>
			<?php
				if(array_key_exists('email', $value) && !empty($value['email'])){
					echo $value['email'];
				}
			?>
		</td>
		<td>
			<?php
				if (array_key_exists('gender', $value) && !empty($value['gender'])) {
					echo $value['gender'];
				}
			?>
		</td>
		<td>
			<?php
				if(array_key_exists('phone', $value) && !empty($value['phone'])){
					echo $value['phone'];
				}
			?>
		</td>
		<td>
			<a href="show.php?id=<?php echo $key;?>">Show</a> | 
			<a href="edit.php?id=<?php echo $key;?>">Edit</a> |
			<a href="delete.php?id=<?php echo $key;?>">Delete</a>
		</td>
	</tr>
	<?php
		}
	}else{
	?>
		<td colspan="7" align="center">No Record Available</td>
	<?php
		}
	?>
</table>


<?php
include_once 'footer.php';
?>