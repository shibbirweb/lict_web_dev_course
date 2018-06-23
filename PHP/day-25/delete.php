<?php
session_start();
if(array_key_exists('sess_data', $_SESSION) && !empty($_SESSION['sess_data'])){
    unset($_SESSION['sess_data'][$_GET['id']]);
}
    $_SESSION['msg'] = "You have successfully deleted";
    header('location:index.php');