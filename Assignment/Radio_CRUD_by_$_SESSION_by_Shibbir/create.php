<?php 
	session_start();
	include_once 'header.php';
 ?>
<?php 
	if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])) {
		echo "<h2>".$_SESSION['msg']."</h2>";
		unset($_SESSION['msg']);
	}
 ?>
<form action="add.php" method="post">
	<h3>* Required Field</h3>
	<table>
		<tr>
			<td>Gender *</td>
			<td>
				<input id="Male" type="radio" name="gender" value="Male">
				<label for="Male">Male</label>
				<input id="Female" type="radio" name="gender" value="Female">
				<label for="Female">Female</label>
				<input id="Others" type="radio" name="gender" value="Others">
				<label for="Others">Others</label>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="create" value="Create">
			</td>
		</tr>
	</table>
</form>
<h2><a href="index.php">Click here</a> to back to list</h2>
<?php include_once 'footer.php'; ?>