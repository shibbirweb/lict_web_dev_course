<?php
include_once 'lib/app.php';
//
//debug();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!isset($_SESSION['session_data']) && empty($_SESSION['session_data'])){
            $_SESSION['session_data'] = array();
        }
        
        $_SESSION['session_data'][] = $_POST;
        header('location:index.php');
    }

