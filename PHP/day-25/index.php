<?php
session_start();
include_once 'header.php'; // if php page doesn't exist it will show Fatal Error;

if(array_key_exists('sess_data', $_SESSION) && !empty($_SESSION['sess_data'])){
    //echo "<pre>";
    //print_r($_SESSION['sess_data']);
    $data = $_SESSION['sess_data'];
    //session_unset($_SESSION['sess_data']);
}
?>

<p>Click here to create <a href="create.php">New record</a></p>  
<h2>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
</h2>
    <table border="1" cellpadding="20">
    <tr>
        <td>SL NO.</td>
        <td>Name</td>
        <td>E-mail</td>
        <td>Gender</td>
        <td>Action</td>
    </tr>
    <?php 
        if(isset($data) && !empty($data)){
            foreach($data as $keys => $values){
    ?>
    <tr>
        <td><?php echo $keys+1;?></td>
        <td>
            <?php if(array_key_exists('nm', $values) && !empty($values['nm'])){
     echo $values['nm'];
            }?>
        </td>
        <td>
            <?php if(array_key_exists('per_email', $values) && !empty($values['per_email'])){
     echo $values['per_email'];
            }?>
        </td>
        <td>
            <?php if(array_key_exists('gender', $values) && !empty($values['gender'])){
     echo $values['gender'];
            }?>
        </td>
        <td>
            <a href="show.php?id=<?php echo $keys;?>">Show</a> 
          | <a href="edit.php?id=<?php echo $keys;?>">Edit</a> 
          | <a href="delete.php?id=<?php echo $keys;?>">Delete</a>
        </td>
    </tr>
    <?php
            }
        }else{
    ?>
    <tr>
        <td colspan="4" align="center">No data avialable</td>
    </tr>
    <?php
        }
    ?>
</table>


<?php
include_once 'footer.php'; // if php page doesn't exist it will show Fatal Error;
?>