<?php
session_start();
if(array_key_exists('sess_data', $_SESSION)){
    print_r($_SESSION['sess_data']);
    $_SESSION['sess_data'][$_POST['id']] = $_POST;
    
    $_SESSION['msg'] = "You have successfully edited";
}
header('location:index.php');