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

<table border="1" cellpadding="20">
    <tr>
        <td>SL NO.</td>
        <td>Name</td>
        <td>E-mail</td>
        <td>Action</td>
    </tr>
    <?php 
        if(isset($data) && !empty($data)){
            foreach($data as $keys => $values){
    ?>
    <tr>
        <td><?php echo $keys;?></td>
        <td>
            <?php if(array_key_exists('nm', $values) && !empty($values['nm'])){
     echo $data['nm'];
            }?>
        </td>
        <td>
            
        </td>
        <td>Show | Edit | Delete</td>
    </tr>
    <?php
            }
        }
    ?>
</table>


<?php
include_once 'footer.php'; // if php page doesn't exist it will show Fatal Error;
?>