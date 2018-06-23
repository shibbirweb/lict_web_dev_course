<?php 
	session_start();
	if (strtoupper($_SERVER["REQUEST_METHOD"] == "POST")) {
		if (isset($_POST['create'])) {
			if (!array_key_exists('main_data', $_SESSION) && !isset($_SESSION['main_data'])) {
				$_SESSION['main_data'] = array();
			}
			if (!empty($_POST['gender'])) {
				$gender  = $_POST['gender'];
				$_SESSION['main_data'][] = array(
											'gender'  => $gender
										);
				$_SESSION['msg'] = "<span style='color:green;'>Record created successfully</span>";
				header('location:index.php');

			}else{
				$_SESSION['msg'] = "<span style='color:red;'>Field must not be empty</span>";
				header('location:create.php');
			}
		}
	}else{
		header('location:index.php');
	}
 ?>