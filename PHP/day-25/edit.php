<?php
session_start();
    if(array_key_exists('sess_data', $_SESSION)){
        $data = $_SESSION['sess_data'][$_GET['id']];
    }
?>

<form action="store.php?id=<?php echo $_GET['id'];?>" method="POST">
    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
    <fieldset>
        <legend>User Info</legend>
        <p>
            <label>Name:</label>
            <input type="text" name="nm" value="<?php echo $data['nm'];?>" />
        </p>
        <p>
            <label> E-mail </label>
            <input type="email" name="per_email" value="<?php echo $data['per_email'];?>" />
        </p>
          <label>Gender</label>
          <p>
            <?php
                if($data['gender'] == "Male"){      
            ?>
                <input type='radio' checked='checked' name='gender' value='Male' /> Male
                
            <?php
               }else{     
            ?>
                <input type='radio'  name='gender' value='Male' />Male
            <?php
               }
            ?>
            <?php
                if($data['gender'] == "Female"){
            ?>
                <input type='radio' checked='checked' name='gender'  value='Female' /> Female
            <?php
                }else{
            ?>
                    <input type='radio'  name='gender'  value='Female' /> Female
            <?php
                }
            ?>
          </p>     
        <input type="submit" name="sub" value="Send Info" />
    </fieldset>
</form>

