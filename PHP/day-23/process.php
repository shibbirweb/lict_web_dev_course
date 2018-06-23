<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!isset($_SESSION['all_data'])){
        $_SESSION['session_dt'] = array();
    }
    if(array_key_exists('f_name', $_POST) && !empty($_POST['f_name'])){
        $_SESSION['session_dt'][] = $_POST;
    }
    header('location:session.php');
}
