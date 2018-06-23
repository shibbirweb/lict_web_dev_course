<?php
	session_start(); 
	include_once 'header.php';
	if (isset($_GET['id'])) {
		if (array_key_exists('main_data', $_SESSION) && !empty($_SESSION['main_data'])) {
			$singleData = $_SESSION['main_data'][$_GET['id']];
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
			<td>Gender *</td>
			<td>
				<input id="Male" type="radio" name="gender" value="Male"
					<?php 
						if ($singleData['gender'] == "Male") {
							echo "checked";
						}
					 ?>
				>
				<label for="Male">Male</label>
				<input id="Female" type="radio" name="gender" value="Female"
					<?php 
						if ($singleData['gender'] == "Female") {
							echo "checked";
						}
					 ?>
				>
				<label for="Female">Female</label>
				<input id="Others" type="radio" name="gender" value="Others"
					<?php 
						if ($singleData['gender'] == "Others") {
							echo "checked";
						}
					 ?>
				>
				<label for="Others">Others</label>
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