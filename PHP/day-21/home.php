<?php
include_once 'header.php';
?>
<?php
$f_name_err = $l_name_err = $email_err = $phone_err = $address_err = $gender_err = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST) == 'form_sub'){
        if(empty($_POST['f_name'])){
            $f_name_err = "First name field must not empty";
        }elseif(array_key_exists('f_name', $_POST) && !empty($_POST['f_name'])){
            $f_name = validate($_POST['f_name']);            
        }
        if(empty($_POST['l_name'])){
            $l_name_err = "Last name field must not empty";
        }elseif(array_key_exists('l_name', $_POST) && !empty($_POST['l_name'])){
            $l_name = validate($_POST['l_name']);            
        }
        if(empty($_POST['email'])){
            $email_err = "E-mail field must not empty";
        }elseif(!empty ($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email_err = "Provide valid email address";
        }elseif(array_key_exists('email', $_POST) && !empty($_POST['email'])){
            $email = validate($_POST['email']);            
        }
        if(empty($_POST['phone'])){
            $phone_err = "Phone number field must not empty";
        }elseif(array_key_exists('phone', $_POST) && !empty($_POST['phone'])){
            $phone = validate($_POST['phone']);            
        }
        if(empty($_POST['address'])){
            $address_err = "Address field must not empty";
        }elseif(array_key_exists('address', $_POST) && !empty($_POST['address'])){
            $address = validate($_POST['address']);           
        }
        if(empty($_POST['gender'])){
            $gender_err = "You must select gender";
        }elseif(array_key_exists('gender', $_POST) && !empty($_POST['gender'])){
            $gender = $_POST['gender'];
        }
    }  
}
    function validate($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripcslashes($data);
        return $data;
    }
?>
    <p> * Required Field</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <p>
        <label>*First Name</label>
        <input type="text" name="f_name" /> <?php echo $f_name_err;?>
    </p>
    <p>
        <label>*Last Name</label>
        <input type="text" name="l_name" /> <?php echo $l_name_err;?>
    </p>
    <p>
        <label>*Email</label>
        <input type="text" name="email" /> <?php echo $email_err;?>
    </p>
    <p>
        <label>*Phone Number</label>
        <input type="text" name="phone" /> <?php echo $phone_err;?>
    </p>
    <p>
        <label>*Address</label>
        <input type="text" name="address" /> <?php echo $address_err;?>
    </p>
    <p>
        <label>*Gender</label>
        <input type="radio" name="gender" value="Male"/>Male
        <input type="radio" name="gender" value="Female"/>Female <?php echo $gender_err;?>
    </p> 
    <p>
        <input type="submit" name="form_sub" />
    </p>
</form>
<?php
    if(!empty($f_name) && !empty($l_name) && !empty($email) && !empty($phone) && !empty($address) && !empty($gender)){
       echo "<fieldset><legend>You submitted</legend>";
       echo "Your first name is: ".$f_name . "<br />";
       echo "Your last name is: ".$l_name . "<br />";
       echo "Your E-mail is: ".$email . "<br />";
       echo "Your phone number is: ".$phone . "<br />";
       echo "Your address is: ".$address . "<br />";
       echo "Your gender is: ".$gender . "<br />";
       echo "</fieldset>"; 
    }
    

?>
<?php
include_once 'footer.php'
?>