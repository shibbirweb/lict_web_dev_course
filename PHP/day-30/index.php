<?php
include_once 'lib/app.php';
include_once 'header.php';

    if(array_key_exists('session_data', $_SESSION) && !empty($_SESSION['session_data'])){
        $data = $_SESSION['session_data'];
    }
    
?>

<h3> <a href="create.php">Click here </a> to create information</h3>

<table border="1" cellpadding="20">
    <tr>
        <th> SL Nol</th>
        <th> Name</th>
        <th> Choice1</th>
        <th> Choice2</th>
        <th> Choice3</th>
        <th> Action </th>
    </tr>
    <?php
        if(isset($data) && !empty($data)){
            foreach($data as $keys=>$values){ 
    ?>
    <tr>
        <td> <?php echo $keys +1; ?></td>
        <td> 
            <?php  
                if(array_key_exists('full_name', $values)){
                    echo $values['full_name'];
                }else{
                    echo "not Given";
                }
            ?> 
        </td>
        <td> 
            <?php  
                if(array_key_exists('code', $values)){
                    echo $values['code'];
                }else{
                    echo "not chosen";
                }
            ?> 
        </td>
        <td> 
            <?php  
                if(array_key_exists('garden', $values)){
                    echo $values['garden'];
                }else{
                    echo "not chosen";
                }
            ?> 
        </td>
        <td> 
            <?php  
                if(array_key_exists('facebook', $values)){
                    echo $values['facebook'];
                }else{
                    echo "not chosen";
                }
            ?> 
        </td>
        <td> <a href="show.php?id=<?php echo $keys; ?>"> Show </a> | <a href="edit.php?id=<?php echo $keys; ?>"> Edit </a>| <a href="delete.php?id=<?php echo $keys; ?>"> Delete </a> </td>
    </tr>
    <?php
            }
        }else{        
    ?>
    <tr>
        <td colspan="3" align="center"> No Data is Available</td>
    </tr>
    <?php
        }
    ?>
</table>

<?php include_once 'footer.php'; ?>