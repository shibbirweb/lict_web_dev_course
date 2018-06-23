<?php
 session_start();
 include_once 'header.php'; ?>

 <?php 
	if (isset($_SESSION['warning'])) {
		echo "<h2>".$_SESSION['warning']."</h2>";
		unset($_SESSION['warning']);
	}
 ?>
<form action="add.php" method="post">
	<table>
		<tr>
			<td>Skill : </td>
			<td>
				<input type="checkbox" name="skill[]" value="HTML">HTML
				<input type="checkbox" name="skill[]" value="CSS">CSS
				<input type="checkbox" name="skill[]" value="JavaScript">JavaScript
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Submit">
				<input type="reset" value="Clear">
			</td>
		</tr>
	</table>
</form>
<h2><a href="index.php">Back to list</a></h2>







<?php include_once 'footer.php'; ?>