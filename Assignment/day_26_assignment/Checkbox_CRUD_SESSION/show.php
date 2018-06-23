<?php
 session_start();
 include_once 'header.php'; ?>

<?php
if (isset($_GET['id'])) {
	$single = $_SESSION['data'][$_GET['id']];
	echo "<pre>";
	//print_r($single);
	echo "</pre>";
	$single_skill = $single['skill'];
}
?>

<table cellpadding="15px" border="1px" style="border-collapse: collapse;">
	<tr align="center">
		<td>User ID</td>
		<td>Skill</td>
		<td>Action</td>
	</tr>
	<tr align="center">
		<td><?php echo $_GET['id']+1; ?></td>
		<td>
			<?php 
			if (isset($single_skill) AND !empty($single)) {
				foreach ($single_skill as $key => $value) {
					echo $value." ";
				}
			}
			 ?>
		</td>
		<td>
			<a href="update.php?id=<?php echo $_GET['id'];?>">Update</a> |
			<a href="delete.php?id=<?php echo $_GET['id'];?>">Delete</a>
		</td>
	</tr>
</table>
<h2><a href="index.php">Back to list</a></h2>
<h2><a href="create.php">Create New Record</a></h2>





<?php include_once 'footer.php'; ?>