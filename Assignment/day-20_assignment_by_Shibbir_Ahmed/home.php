<?php
include_once 'header.php';
?>
<?php
$f_name_err = $address_err = $email_err = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST) == 'form_sub'){
        if(empty($_POST['f_name'])){
            $f_name_err = "<span style='color:red'> Name field must not be empty</span>";
        }elseif(array_key_exists('f_name', $_POST) && !empty($_POST['f_name'])){
        $name = validate($_POST['f_name']);
        }
        if(array_key_exists('gender', $_POST) && !empty($_POST['gender'])){
            $gender = $_POST['gender'];
        }
        if(array_key_exists('hobby', $_POST) && !empty($_POST['hobby'])){
            $hobby = $_POST['hobby']; 
        }
        if(empty($_POST['address'])){
            $address_err = "<span style='color:red'> Address field must not empty</span>";
        }elseif (array_key_exists('address', $_POST) && !empty($_POST['address']) ) {
            $address = validate($_POST['address']);
        }
        if(empty($_POST['email'])){
            $email_err = "<span style='color:red'> E-mail field must not empty</span>";
        }elseif(array_key_exists('email', $_POST) && !empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email_err = "<span style='color:red'> Provide valid E-mail address</span>";
        }elseif (array_key_exists('email', $_POST) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = validate($_POST['email']);
        } 
    }
    if(!empty($name) && !empty($address) && !empty($email)){
        echo "Name: " . $name . "<br/>";
        echo "Address is: " . $address . "<br/>";
        echo "Your e-mail address is: " . $email . "<br/>";
        if(!empty($gender)){
            echo "Gender: " . $gender . "<br/>";
        }
        if(!empty($hobby)){
            echo "Hobbies is: ";
            foreach ($hobby as $hob){
                echo $hob . ", ";
            }
            echo "<br/>";
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
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <p style='color:red'> * Required Field</p>
    <p>
        <label><span style="color: red">*</span>Name</label>
        <input type="text" name="f_name" /><?php echo $f_name_err;?>
    </p>
    <p>
        <label><span style="color: red">*</span>Address</label>
        <input type="text" name="address" /> <?php echo $address_err;?>
    </p>
    <p>
        <label><span style="color: red">*</span>Email</label>
        <input type="text" name="email" /> <?php echo $email_err;?>
    </p> 
    <p>
        <label>Gender</label>
        <input type="radio" name="gender" value="Male" />Male
        <input type="radio" name="gender" value="Female" />Female
    </p>
    <p>
        <label>Hobbies</label>
        <input type="checkbox" name="hobby[]" value="Coding" /> Coding
        <input type="checkbox" name="hobby[]" value="Watching" /> Watching
        <input type="checkbox" name="hobby[]" value="Swimming" /> Swimming
    </p>
    <p>
        <input type="submit" name="form_sub" />
    </p>
</form>
<?php
include_once 'footer.php'
?>