<?php
session_start();
include_once 'header.php';
?>
<?php
$f_name_err = $l_name_err = $email_err = $phone_err = $address_err = $gender_err = $err_email = $website = $err_msg_web = '';
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
            $err_email = "Email field must not empty";
        }elseif(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email = $_POST['email'];
        }else{
            $err_email = "E-mail format is not correct, Provide valid email address";
        }
        if(empty($_POST['website'])){
            $err_msg_web = "Website field must not empty";
        }elseif(!filter_var($_POST['website'], FILTER_VALIDATE_URL)){
            $err_msg_web = "Website address format is not valid, provide valid web address";
        }else{
            $website = $_POST['website'];
        }
    }  
}
    function validate($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripcslashes($data);
        return $data;
    }
    
    
    $int_number = 20.2;
    if(filter_var($int_number, FILTER_VALIDATE_INT)){
        echo "The number is integer";
    }else{
        echo "Then number is not an int";
    }
    echo "<br />";
    $sample_email = "tarpan@gmail.com";
    if(filter_var($sample_email, FILTER_VALIDATE_EMAIL)){
        echo "The email format is correct";
    }else{
        echo "Please provide correct email format";
    }
    
    
    $str = "<h1>Hello</h1>";
    $str_s = filter_var($str, FILTER_SANITIZE_STRING);
    echo $str_s."<br/>";
    echo $website;
    
?>

    <p> * Required Field</p>
    <form action="process.php" method="POST">
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
        <input type="text" name="email" /> <?php echo $err_email;?>
    </p>
    <p>
        <label>*Website</label>
        <input type="text" name="website" /> <?php if(!empty($err_msg_web)){echo $err_msg_web;}?>
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