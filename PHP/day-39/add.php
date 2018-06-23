<?php
include_once 'lib/application.php';
$nm = $_POST['full_name'];
$gnd = $_POST['gender'];


$query = "INSERT INTO person_info (Id, Name, Gender) VALUES (null, '".$nm."','".$gnd."')";

$result = mysqli_query($link, $query);

if($result){
    $_SESSION['msg1'] = "Data inserted successfully";
} else {
    $_SESSION['msg2'] = "Data is not inserted successfully";
}
header('Location: index.php');