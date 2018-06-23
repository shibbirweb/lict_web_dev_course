<?php 
	session_start();
	include_once 'header.php';
	if (isset($_GET['id'])) {
		$update = $_SESSION['data'][$_GET['id']]['skill'];
		echo "<pre>";
		//print_r($update);
		echo "</pre>";
	}
 ?>
 <?php 
	if (isset($_SESSION['warning'])) {
		echo "<h2>".$_SESSION['warning']."</h2>";
		unset($_SESSION['warning']);
	}
 ?>
<form action="store.php" method="post">
	<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
	<table>
		<tr>
			<td>User ID : </td>
			<td><?php echo $_GET['id']+1;?></td>
		</tr>
		<tr>
			<td>Skill : </td>
			<td>
				<input type="checkbox" name="skill[]" 
				<?php 
					if(in_array('HTML', $update)){
						echo "checked";
					}
				 ?> value="HTML">HTML
				<input type="checkbox" name="skill[]"
					<?php 
					if(in_array('CSS', $update)){
						echo "checked";
					}
					?>
				 value="CSS">CSS
				<input type="checkbox" name="skill[]"
				<?php 
					if (in_array('JavaScript', $update)) {
						echo "checked";
					}
				 ?>
				 value="JavaScript">JavaScript
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="update" value="Update">
			</td>
		</tr>
	</table>
</form>
<h2><a href="index.php">Back to list</a></h2>
 <?php include_once 'footer.php'; ?>