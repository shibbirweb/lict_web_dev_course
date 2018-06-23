<?php
include_once 'lib/application.php';
//$link = mysqli_connect('localhost', 'root', '', 'first_db') or die("Error");
$nm = $_POST['full_name'];
$gnd = $_POST['gender'];

$query = "INSERT INTO person_info (Id, Name, Gender) VALUES(null, '". $nm."', '".$gnd."')";
$result = mysqli_query($link, $query);

if($result){
    $_SESSION['msg1'] = "Data successfully stored!";
}else{
    $_SESSION['msg2'] = "Data can not be stored in db!";
}

header('location:index.php');

