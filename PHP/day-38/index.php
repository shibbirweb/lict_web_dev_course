<?php
include_once 'lib/application.php';

$query = "SELECT * FROM person_info";
$result = mysqli_query($link, $query);
$data = array();
while ($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

amader_debug($data);

?>

<table border="1"  cellspacing="0" cellpadding = "10" align="center">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Gender</td>
    </tr>
    <?php
    $id = 1;
    
    foreach ($data as $show){        
    ?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $show['Name']; ?></td>
        <td><?php echo $show['Gender']; ?></td>
    </tr>
    <?php
    $id++;
    }
    ?>
</table>