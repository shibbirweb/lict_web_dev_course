<?php
session_start();
if(strtoupper($_SERVER["REQUEST_METHOD"] == "POST")){
    if(!isset($_SESSION['sess_data']) && empty($_SESSION['sess_data'])){
        $_SESSION['sess_data'] = array();
    }
    if(isset($_POST['sub'])){
       $_SESSION['sess_data'][] = $_POST;
       $_SESSION['msg'] = "You have successfully created!";
    }
    header('location:index.php');
}