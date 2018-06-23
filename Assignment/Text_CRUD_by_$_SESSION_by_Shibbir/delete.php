<?php 
	session_start();
	if (isset($_GET['id'])) {
		if (array_key_exists('data', $_SESSION) && !empty($_SESSION['data'])) {
			unset($_SESSION['data'][$_GET['id']]);
			$_SESSION['msg'] = "<span style='color:red;'>Record deleted successfully</span>";
			header('location:index.php');
		}else{
			header('location:index.php');
		}
	}else{
		header('location:index.php');
	}

 ?>