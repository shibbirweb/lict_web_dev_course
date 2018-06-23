<?php
include_once 'lib/application.php';
$id = $_GET ['id'];
$query = "DELETE FROM person_info WHERE Id = '".$id."'";
$result = mysqli_query($link, $query);

if($result){
    $_SESSION['msg1'] = "Data deleted successfully";
} else {
    $_SESSION['msg2'] = "Data can not be deleted!";
}

header('Location:index.php');
