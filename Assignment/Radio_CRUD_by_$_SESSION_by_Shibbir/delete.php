<?php 
	session_start();
	if (isset($_GET['id'])) {
		if (array_key_exists('main_data', $_SESSION) && !empty($_SESSION['main_data'])) {
			unset($_SESSION['main_data'][$_GET['id']]);
			$_SESSION['msg'] = "<span style='color:red;'>Record deleted successfully</span>";
			header('location:index.php');
		}else{
			header('location:index.php');
		}
	}else{
		header('location:index.php');
	}

 ?>