<?php
include_once 'lib/application.php';

$query = "SELECT * FROM person_info";
$result = mysqli_query($link, $query);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
//amader_debug($data);
?>
<h1>
<?php
    if(isset($_SESSION['msg1'])){
        echo $_SESSION['msg1'];
        unset($_SESSION['msg1']);
    }
    if(isset($_SESSION['msg2'])){
        echo $_SESSION['msg2'];
        unset($_SESSION['msg2']);
    }
?>
</h1>
<table border="1"  cellspacing="0" cellpadding = "20" align="center">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Action</td>
    </tr>
    <?php
    if (count($data) > 0) {
        $sl = 0;
        foreach ($data as $values) {
            $sl++;
            ?>
            <tr>
                <td><?php echo $sl; ?></td>
                <td><?php echo $values['Name']; ?></td>
                <td><?php echo $values['Gender']; ?></td>
                <td>
                    <a href="show.php?id=<?php echo $values['Id']?>">Show</a> |
                    <a href="edit.php?id=<?php echo $values['Id']?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $values['Id']?>">Delete</a>
                </td>
            </tr>
            <?php
        }
    } else {
        ?>
            <tr>
                <td>No data availabel</td>
            </tr>
   <?php     
    }
    ?>
</table>
<p><a href="create.php">Create</a></p>