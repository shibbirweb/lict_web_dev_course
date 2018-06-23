<?php
	session_start(); 
	include_once 'header.php';
	if (isset($_GET['id'])) {
		if (array_key_exists('data', $_SESSION) && !empty($_SESSION['data'])) {
			$singleData = $_SESSION['data'][$_GET['id']];
			echo "<pre>";
			//print_r($singleData);
			echo "</pre>";
		}
	}
 ?>
<?php 
	if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])) {
		echo "<h2>".$_SESSION['msg']."</h2>";
		unset($_SESSION['msg']);
	}
 ?>
<h3>* Required Field</h3>
<form action="update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
	<table>
		<tr>
			<td>User ID</td>
			<td><?php echo $_GET['id']+1;?></td>
		</tr>
		<tr>
			<td>First Name *</td>
			<td>
				<input type="text" name="f_name" placeholder="Type your first name" value="<?php echo $singleData['f_name'];?>">
			</td>
		</tr>
		<tr>
			<td>Last Name *</td>
			<td>
				<input type="text" name="l_name" placeholder="Type your last name" value="<?php echo $singleData['l_name'];?>">
			</td>
		</tr>
		<tr>
			<td>E-mail *</td>
			<td>
				<input type="text" name="email" placeholder="Type your email address" value="<?php echo $singleData['email'];?>">
			</td>
		</tr>
		<tr>
			<td>Phone *</td>
			<td>
				<input type="text" name="phone" placeholder="Type your phone number" value="<?php echo $singleData['phone'];?>">
			</td>
		</tr>
		<tr>
			<td>Address *</td>
			<td>
				<input type="text" name="address" placeholder="Type your address" value="<?php echo $singleData['address'];?>">
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
<h2><a href="index.php">Click here</a> to back to list</h2>



<?php include_once 'footer.php'; ?>