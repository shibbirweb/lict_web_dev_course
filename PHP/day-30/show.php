<?php
include_once 'lib/app.php';

  if(array_key_exists('session_data', $_SESSION) && !empty($_SESSION['session_data'])){
        $data = $_SESSION['session_data'][$_GET['id']];
    }
    
 debug($data);
