<?php
include_once 'lib/app.php';
//
//debug();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!isset($_SESSION['session_data']) && empty($_SESSION['session_data'])){
            $_SESSION['session_data'] = array();
        }
        if(empty($_POST['name']) && empty($_POST['phpCoding']) && empty($_POST['javaCoding']) && empty($_POST['htmlMarkup'])){
            $_SESSION['nameErr'] = "Name field must not empty";
            $_SESSION['hobbyErr'] = "At least one hobby must be selected";
                header('Location:create.php');
        }elseif(!empty($_POST['name'])){
            if(!empty($_POST['phpCoding']) || !empty($_POST['javaCoding']) || !empty($_POST['htmlMarkup'])){
                $_SESSION['session_data'][] = $_POST;
                header('location:index.php'); 
            } else {
                $_SESSION['hobbyErr'] = "At least one hobby must be selected";
                header('Location:create.php');
            }
            
        }else{
            $_SESSION['nameErr'] = "Name field must not empty";
            header('Location:create.php');
        }
        
    }

