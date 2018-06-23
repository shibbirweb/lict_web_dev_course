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
 <h3>* Required Field</h3>
<form action="add.php" method="post">
	<table>
		<tr>
			<td>First Name *</td>
			<td>
				<input type="text" name="f_name" placeholder="Type your first name">
			</td>
		</tr>
		<tr>
			<td>Last Name *</td>
			<td>
				<input type="text" name="l_name" placeholder="Type your last name">
			</td>
		</tr>
		<tr>
			<td>E-mail *</td>
			<td>
				<input type="text" name="email" placeholder="Type your email address">
			</td>
		</tr>
		<tr>
			<td>Phone *</td>
			<td>
				<input type="text" name="phone" placeholder="Type your phone number">
			</td>
		</tr>
		<tr>
			<td>Address *</td>
			<td>
				<input type="text" name="address" placeholder="Type your address">
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