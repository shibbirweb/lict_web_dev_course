<?php
include_once 'lib/application.php';
$id = $_GET['id'];
$query = "SELECT * FROM person_info WHERE id='".$id."'";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>

<form action="store.php?id=<?php echo  $row['Id']; ?>" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['Id']; ?>" />
    <fieldset>
        <p>
            <label for="1">    Name          </label>
            <input type="text" name="full_name" id="1" value="<?php echo $row['Name']?>"/>
        </p>
        <p>Gender
          <?php
            if($row['Gender'] == 'Male'){
          ?>
           <input type="radio" name="gender" value="Male" id="1" checked="checked"/>
            <?php
                            }else{
            ?>
               <input type="radio" name="gender" value="Male" id="1" />
             <?php
                            }               
            ?>
            <label for="1"> Male</label>
            <?php
            if($row['Gender'] == 'Female'){
          ?>
           <input type="radio" name="gender" value="Female" id="2" checked="checked"/>
            <?php
                            }else{
            ?>
               <input type="radio" name="gender" value="Female" id="2" />
             <?php
                            }               
            ?>
        
            <label for="2"> FeMale</label>
        </p>
        <p> <input type="reset"/> <input type="submit" value="send_info"/>
    </fieldset>
</form>
