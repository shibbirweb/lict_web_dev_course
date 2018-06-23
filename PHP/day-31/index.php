<?php
include_once 'lib/app.php';
include_once 'header.php';

    if(array_key_exists('session_data', $_SESSION) && !empty($_SESSION['session_data'])){
        $data = $_SESSION['session_data'];
    }
    
?>

<h3> <a href="create.php">Click here </a> to create information</h3>

<table border="1" cellpadding="14">
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
                if(array_key_exists('name', $values)){
                    echo $values['name'];
                }else{
                    echo "not Given";
                }
            ?> 
        </td>
        <td> 
            <?php  
                if(array_key_exists('phpCoding', $values)){
                    //echo $values['phpCoding'];
                    if($values['phpCoding'] == "phpCoding"){
                        echo "PHP Coding";
                    }
                }else{
                    echo "not chosen";
                }
            ?> 
        </td>
        <td> 
            <?php  
                if(array_key_exists('javaCoding', $values)){
                    //echo $values['javaCoding'];
                    if($values['javaCoding'] == "javaCoding"){
                        echo "Java Coding";
                    }
                }else{
                    echo "not chosen";
                }
            ?> 
        </td>
        <td> 
            <?php  
                if(array_key_exists('htmlMarkup', $values)){
                    //echo $values['htmlMarkup'];
                    if($values['htmlMarkup'] == "htmlMarkup"){
                        echo "HTML Markup";
                    }
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
        <td colspan="6" align="center"> No Data is Available</td>
    </tr>
    <?php
        }
    ?>
</table>

<?php include_once 'footer.php'; ?>