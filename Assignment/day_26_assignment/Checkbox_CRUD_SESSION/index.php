<?php 
session_start();
include_once 'header.php';
if (array_key_exists('data', $_SESSION) AND !empty($_SESSION['data'])) {
	$data = $_SESSION['data'];
	echo "<pre>";
	//print_r($data);
	echo "</pre>";
	//session_unset();
}
 ?>
<h2><a href="create.php">Create Record</a></h2>
<?php 
	if (isset($_SESSION['msg'])) {
		echo "<h2>".$_SESSION['msg']."</h2>";
		unset($_SESSION['msg']);
	}
 ?>
<table cellpadding="15px" border="1px" style="border-collapse: collapse;">
	<tr align="center">
		<td>User ID</td>
		<td>Skill</td>
		<td>Action</td>
	</tr>
	<?php 
	if(!empty($data)){
		foreach ($data as $key => $value) {
?>
	<tr align="center">
		<td><?php echo $key+1; ?></td>
		<td>
			<?php 
			$skill = $value['skill'];
			echo "<pre>";
			//print_r($skill);
			echo "</pre>";
			foreach ($skill as $no => $skill_name) {
				echo $skill_name. " ";
			}
			 ?>
		</td>
		<td>
			<a href="show.php?id=<?php echo $key;?>">Show</a> |
			<a href="update.php?id=<?php echo $key;?>">Update</a> |
			<a href="delete.php?id=<?php echo $key;?>">Delete</a>
		</td>
	</tr>
	<?php 
		}
	}else{
	 ?>
	 <tr>
	 	<td colspan="3" align="center">No data</td>
	 </tr>
	<?php 
		}
	?>
	
</table>



<?php include_once 'footer.php'; ?>
 			
