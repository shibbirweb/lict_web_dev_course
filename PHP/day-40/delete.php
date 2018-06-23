<?php

include_once 'lib/application.php';
$id = $_GET['id'];
$query = "DELETE FROM person_info WHERE id='".$id."'";
$result = mysqli_query($link, $query);

if($result){
    $_SESSION['msg1'] = "Data Deleted successfully !";
}else{
    $_SESSION['msg2'] = "Data can not be deleted!";
}

header('location:index.php');

