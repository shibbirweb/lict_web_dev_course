<?php
    //include 'header.php';
    //require 'header.php'; // if php page doesn't exist it will show Fatal Error;
    //include_once 'header.php';
    require_once 'header.php'; // if php page doesn't exist it will show Fatal Error;
?>
<?php 
    $err_messge_name = $err_messge_email = $err_messge_phone = $err_messge_website = $err_messge_gender = $err_messge_address = $err_messge_comment = '';
    $name = $email = $phone = $website = $gender = $address = $comment = '';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST['f_name'])){
            $err_messge_name = "<span style='color:red;'>Name field must not empty</span>";  
        }elseif(!empty ($_POST['f_name'])) {
            $name = validate($_POST['f_name']);
        }else{
            echo "The name is not empty";
        }
        if(empty($_POST['email'])){
           $err_messge_email = "<span style='color:red;'>E-mail field must not empty</span>";
        }elseif(!empty($_POST['email'])){
            $email = validate($_POST['email']);
        }else{
            echo "Email field must not empty";
        }
        if(empty($_POST['phone'])){
           $err_messge_phone = "<span style='color:red;'>Phone field must not empty</span>";
        }elseif(!empty($_POST['phone'])){
            $phone = validate($_POST['phone']);
        }else{
            echo "Phone field must not empty";
        }
        if(empty($_POST['website'])){
           $err_messge_website = "<span style='color:red;'>Website field must not empty</span>";
        }elseif(!empty($_POST['website'])){
            $website = validate($_POST['website']);
        }else{
            echo "Website field must not empty";
        }
        if(empty($_POST['gender'])){
            $err_messge_gender = "<span style='color:red;'>Gender field must not empty</span>";
        } elseif(!empty($_POST['gender'])){
            $gender = validate($_POST['gender']); 
        } else{
            echo "Gender field must not empty";
        }
        if(empty($_POST['address'])){
            $err_messge_address = "<span style='color:red;'>Address field must not empty</span>";
        }elseif(!empty($_POST['address'])){
            $address = validate($_POST['address']);
        } else{
            echo "Address field must not empty";
        }
        if(empty($_POST['comment'])){
            $err_messge_comment = "<span style='color:red;'>Comment field must not empty</span>";
        }elseif(!empty($_POST['comment'])){
            $comment = validate($_POST['comment']);
        } else{
            echo "Comment field must not empty";
        }
        
        $name = "Your name is: ".$name;
        $email = "Your email is: ".$email;
        $phone = "Your phone is: ".$phone;
        $website = "Your website is: ".$website;
        $gender = "Your gender is: ".$gender;
        $address = "Your address is: ".$address;
        $comment = "Your comment is: ".$comment;
        
        
    }
    /*function add($txt){
        $txt = 2 + $txt;
        global $txt;
        return $txt;
    }
    echo add(10);
    echo $txt;*/
    function validate($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripcslashes($data);
        return $data;
    }

?>

<div class="container">
    <div class="our_cont">
        <h3>Form Validation</h3> 
        <p style="color: red;">*  Required Field</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <table>
                <tr>
                    <td><label for="1">Full Name *</label></td>
                    <td><input type="text" name="f_name" id="1" /><?php echo $err_messge_name;?></td>
                </tr>
                <tr>
                    <td><label for="2">E-mail *</label></td>
                    <td><input type="email" name="email" id="2" /><?php echo $err_messge_email;?></td>
                </tr>
                <tr>
                    <td><label for="3">Phone *</label></td>
                    <td><input type="text" name="phone" id="3" /><?php echo $err_messge_phone;?></td>
                </tr>
                <tr>
                    <td><label for="4">Website *</label></td>
                    <td><input type="text" name="website" id="4" /><?php echo $err_messge_website;?></td>
                </tr>
                <tr>
                    <td>Gender *</td>
                    <td><input type="radio" name="gender" value="Male"  />Male <input type="radio" name="gender" value="Female"  />Female  <?php echo $err_messge_gender;?></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="5">Address *</label></td>
                    <td><input type="text" name="address" id="5" /><?php echo $err_messge_address;?></td>
                </tr>
                <tr>
                    <td><label for="6">Comment *</label></td>
                    <td><textarea name="comment" rows="7" cols="50" id="6"></textarea><?php echo $err_messge_comment;?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" /><input type="reset" value="Clear" /></td>
                </tr>
            </table>
        </form>
        <?php
            if($name!==''){
            echo "<fieldset><legend>You submitted</legend>";
            echo $name."<br />";
            echo $email."<br />";
            echo $phone."<br />";
            echo $website."<br />";
            echo $gender."<br />";
            echo $address."<br />";
            echo $comment;
            echo "</fieldset>";
            }
        ?>
    </div>
</div>
<?php 
//include 'footer.php';
//require 'footer.php'; // if php page doesn't exist it will show Fatal Error;
//include_once 'footer.php';
require_once 'footer.php'; // if php page doesn't exist it will show Fatal Error;
?>