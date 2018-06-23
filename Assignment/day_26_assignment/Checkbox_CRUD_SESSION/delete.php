<?php 
	session_start();
	if (isset($_GET['id'])) {
		unset($_SESSION['data'][$_GET['id']]);
		$_SESSION['msg'] = "<span style='color:red;'>Record deleted</span>";
		header('location:index.php');
	}else{
		header('location:index.php');
	}
 ?>