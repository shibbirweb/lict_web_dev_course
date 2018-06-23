<?php
include 'lib/app.php';
    if(array_key_exists('session_data', $_SESSION)){
        unset($_SESSION['session_data'][$_GET['id']]);
        header('Location:index.php');
    }