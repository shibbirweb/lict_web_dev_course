<?php 
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['update']) AND !empty($_POST['skill'])) {
			$_SESSION['data'][$_POST['id']] = $_POST;
			$_SESSION['msg'] = "<span style='color:blue;'>Record updated</span>";
			header('location:index.php');
		}else{
			$_SESSION['warning'] = "<span style='color:red;'>Field must not empty</span>";
			header("location:update.php?id=".urlencode($_POST['id']));
		}
	}else{
		header('location:index.php');
	}
 ?>