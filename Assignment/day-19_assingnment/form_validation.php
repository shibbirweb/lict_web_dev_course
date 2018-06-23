<?php
//include 'header.php';
//require 'header.php'; // if php page doesn't exist it will show Fatal Error;
//include_once 'header.php';
require_once 'header.php'; // if php page doesn't exist it will show Fatal Error;
?>
<?php 
$err_name_msg = $err_email_msg = $err_phone_msg = $err_website_msg = '';
$name = $email = $phone = $website = $gender = $address = $comment = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['f_name'])){
            $err_name_msg = "<span style='color:red;'>Name field must not be empty</span>";  
        }else{
            $name = validate($_POST['f_name']);
        }
        if(empty($_POST['email'])){
            $err_email_msg = "<span style='color:red;'>Email field must not be empty</span>";
        }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $err_email_msg = "<span style='color:red;'>Invalid format, provide valid email format</span>";
        }
        else{
            $email = validate($_POST['email']);
        }
        if(empty($_POST['phone'])){
            $err_phone_msg = "<span style='color:red;'>Phone field must not be empty</span>";
        }else{
            $phone = validate($_POST['phone']);
        }
        if(empty($_POST['website'])){
            $err_website_msg = "<span style='color:red;'>Website field must not be empty</span>";
        }elseif(!filter_var($_POST['website'], FILTER_VALIDATE_URL)){
            $err_website_msg = "<span style='color:red;'>Invalid format, provide valid web address</span>";
        } else {
            $website = validate($_POST['website']);
        }
        if(!empty($_POST['comment'])){
            $comment = validate($_POST['comment']);
        }
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }
        if(isset($_POST['address'])){
            $address = $_POST['address'];
        }
    }
    function validate($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripcslashes($data);
        return $data;
    }

    
?>

            <div class="container">
                <div class="our_cont">
                    <h3> Our code goes here....  </h3>
                    <?php
                        if(!empty($name)){
                            echo "Your name is: ".$name."<br/>";
                        }
                        if(!empty($email)){
                            echo "Your Email is: ".$email."<br/>";
                        }
                        if(!empty($gender)){
                            echo "Your Gender is: ".$gender."<br/>";
                        }
                        if(!empty($address)){
                            echo "Your Address is: ".$address."<br/>";
                        }
                        if(!empty($phone)){
                            echo "Your Phone is: ".$phone."<br/>";
                        }
                        if(!empty($website)){
                            echo "Your website is: ".$website."<br/>";
                        }
                        if(!empty($comment)){
                            echo "Your comment is: ".$comment."<br/>";
                        }
                        
                        
                        
                        
                    ?>
                    
                    <p style="color: red;">*  Required Field</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <table>
                            <tr>
                                <td><label for="1"> Full Name</label></td>
                                <td><input type="text" name="f_name" id="1" />* <?php echo $err_name_msg;?></td>
                            </tr>
                            <tr>
                                <td><label for="2"> Email</label></td>
                                <td><input type="text" name="email" id="2" />* <?php echo $err_email_msg;?></td>
                            </tr>
                            <tr>
                                <td><label for="3"> Phone</label></td>
                                <td><input type="text" name="phone" id="3" />* <?php echo $err_phone_msg;?></td>
                            </tr>
                            <tr>
                                <td><label for="4"> Website</label></td>
                                <td><input type="text" name="website" id="4" />* <?php echo $err_website_msg;?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><input type="radio" name="gender" value="Male"  />Male <input type="radio" name="gender" value="Female"  />Female</td>
                            </tr>
                            <tr>
                                <td><label for="5"> Address</label></td>
                                <td><input type="text" name="address" id="5" />*</td>
                            </tr>
                            <tr>
                                <td><label for="6"> Comment</label></td>
                                <td><textarea name="comment" rows="7" cols="50" id="6"></textarea>*</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Submit" /><input type="reset" value="Clear" /></td>
                            </tr>
                        </table>
                    </form>
                    <br />
                    <hr />
                    <?php
                        $username = $gender = $subject = ''; 
                        if(isset($_POST['subm'])){
                            $username = $_POST['username'];
                            if(isset($_POST['gn'])){
                                $gender = $_POST['gn'];
                            }
                            if(isset($_POST['sub'])){
                                $subject = $_POST['sub'];
                            }
                        }
                    ?>
                    <fieldset>
                        <legend>Simple Form Validation</legend>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <label for="username">User Name: </label>
                            <input type="text" name="username" id="username"/><br />
                            <label> Select Gender</label>
                            <input type="radio" name="gn" value="Male" /> Male
                            <input type="radio" name="gn" value="Female"/> Female<br />
                            <label>Select Subject</label>
                            <input type="checkbox" name="sub[]" value="Bangla" />Bangla
                            <input type="checkbox" name="sub[]" value="English" />English
                            <input type="checkbox" name="sub[]" value="Mathematics" />Mathematics <br />
                            <input type="submit" name="subm"><input type="reset" value="Clear" />
                        </form>
                    </fieldset>
                    <fieldset>
                        <legend>Submitted Data</legend>
                        <?php
                        echo $username."<br/>";
                        if(!empty($gender)){
                            echo $gender."<br/>";
                        }
                        if(!empty($subject)){ 
                            foreach ($subject as $value) {
                                echo $value.", ";
                            }
}
                        ?>
                    </fieldset>


                </div>

            </div>

<?php 
//include 'footer.php';
//require 'footer.php'; // if php page doesn't exist it will show Fatal Error;
//include_once 'footer.php';
require_once 'footer.php'; // if php page doesn't exist it will show Fatal Error;
?>