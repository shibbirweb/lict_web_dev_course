<?php
session_start();
if(strtoupper($_SERVER["REQUEST_METHOD"] == "POST")){
	if(!isset($_SESSION['session_data'])){
		$_SESSION['session_data'] = array();
	}
	if($_POST['submit']){
		$_SESSION['session_data'][] = $_POST;
	}
	header('location:index.php');
}