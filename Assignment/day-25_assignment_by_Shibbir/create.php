<?php
include 'header.php';
?>
<p><a href="index.php">Click here</a> to go homepage</p>
<form action="add.php" method="POST">
	<p>
		<label for="f_name">First Name</label>
		<input type="text" name="f_name" id="f_name" />
	</p>
	<p>
		<label for="l_name">Last Name</label>
		<input type="text" name="l_name" id="l_name" />
	</p>
	<p>
		<label for="email">E-mail</label>
		<input type="text" name="email" id="email" />
	</p>
	<p>
		<label>Gender</label>
		<input type="radio" name="gender" value="Male" /> Male
		<input type="radio" name="gender" value="Female" /> Female
	</p>
	<p>
		<label for="phone">Phone</label>
		<input type="text" name="phone" id="phone" />
	</p>
	<p>
		<input type="submit" name="submit" value="Send" />
		<input type="reset" value="Clear" />
	</p>
</form>
<?php
include 'footer.php';
?>