<?php
session_start();
	if(isset($_POST['update'])){
		if(array_key_exists('session_data', $_SESSION) && !empty($_SESSION['session_data'])){
			$_SESSION['session_data'][$_POST['id']] = $_POST;
			$_SESSION['msg'] = "<span style='color:blue'>Data Updated successfully</span>";
		}header('location:index.php');
	}else{
		header('location:index.php');
	}

?>