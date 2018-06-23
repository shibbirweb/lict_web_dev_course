<?php

function debug($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function findone($id = null){
    if(is_null($id)){
        return '';
    }
    return $_SESSION['session_data'][$id];
}