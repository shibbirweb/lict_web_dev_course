<?php
session_start();
if(strtoupper($_SERVER["REQUEST_METHOD"] == "POST")){
	if(!isset($_SESSION['session_data'])){
		$_SESSION['session_data'] = array();
	}
	if($_POST['submit']){
		$_SESSION['session_data'][] = $_POST;
		$_SESSION['msg'] = "<span style='color:green;'>Record saved successfully</span>";
	}
	header('location:index.php');
}else{
	header('location:index.php');
}