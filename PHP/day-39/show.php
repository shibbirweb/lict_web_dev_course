<?php
include_once 'lib/application.php';
$id = $_GET ['id'];
$query = "SELECT * FROM person_info WHERE Id = '".$id."'";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

$data = $row;

//amader_debug($data);
?>

<fieldset>
    <legend>Individual User's Info</legend>
    <dl>
        <dt>Id of DB</dt>
        <dd><?php echo $data['Id'];?></dd>
        <dt>Name</dt>
        <dd><?php echo $data['Name'];?></dd>
        <dt>Gender</dt>
        <dd><?php echo $data['Gender'];?></dd>
    </dl>
</fieldset>
<p><a href="index.php">List</a></p>
<p><a href="create.php">Create</a></p>
<p><a href="delete.php?id=<?php echo $id;?>">Delete</a></p>
<p><a href="edit.php?id=<?php echo $id;?>">Edit</a></p>