<?php
include_once 'lib/application.php';

$id = $_POST['id'];
$nm = $_POST['full_name'];
$gnd = $_POST['gender'];
$query = "UPDATE person_info SET Name='".$nm."', Gender='". $gnd ."' WHERE Id=". $id;
$result = mysqli_query($link, $query);

if($result){
    $_SESSION['msg1'] = "Data successfully updated in DB";
}else{
    $_SESSION['msg2'] = "Data can not be updated in DB";
}

header('location: index.php');
?>
