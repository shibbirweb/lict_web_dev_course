<?php 
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["submit"]) AND !empty($_POST['skill']) ) {
			if (!isset($_SESSION['data'])) {
				$_SESSION['data'] = array();
			}
			$_SESSION['data'][] = $_POST;
			$_SESSION['msg'] = "<span style='color:green;'>Record Created</span>";
			header('location:index.php');
		}else{
			$_SESSION['warning'] = "<span style='color:red;'>Field must not empty</span>";
			header('location:create.php');
		}
	}else{
		header('location:index.php');
	}
 ?>