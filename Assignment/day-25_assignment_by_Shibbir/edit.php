<?php
session_start();
include_once 'header.php';
?>
<?php
	if(array_key_exists('session_data', $_SESSION) && !empty($_SESSION['session_data'])){
		$data = $_SESSION['session_data'][$_GET['id']];
	}
?>
<p><a href="index.php">Click here</a> to to go list page</p>
<form action="update.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
	<p>
		<label for="f_name">First Name</label>
		<input type="text" name="f_name" id="f_name" value="<?php echo $data['f_name'];?>" />
	</p>
	<p>
		<label for="l_name">Last Name</label>
		<input type="text" name="l_name" id="l_name" value="<?php echo $data['l_name'];?>" />
	</p>
	<p>
		<label for="email">E-mail</label>
		<input type="text" name="email" id="email" value="<?php echo $data['email'];?>" />
	</p>
	<p>
		<label>Gender</label>
		<?php
			if($data['gender'] == "Male"){
		?>
				<input type='radio' checked='checked' name='gender' value='Male' /> Male
		<?php
			}else{
		?>
				<input type='radio' name='gender' value='Male' /> Male
		<?php
			}
		?>
		<?php 
			if($data['gender'] == "Female"){
		?>
		<input type="radio" checked="checked" name="gender" value="Female" /> Female
		<?php
			}else{
		?>
		<input type="radio" name="gender" value="Female" />Female
		<?php
			}
		?>
	</p>
	<p>
		<label for="phone">Phone</label>
		<input type="text" name="phone" id="phone" value="<?php echo $data['phone'];?>" />
	</p>
	<p>
		<input type="submit" name="update" value="Upadate" />
	</p>
</form>



<?php
include_once 'footer.php';
?>