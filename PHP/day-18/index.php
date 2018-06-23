<?php
//include 'header.php';
//require 'header.php'; // if php page doesn't exist it will show Fatal Error;
//include_once 'header.php';
require_once 'header.php'; // if php page doesn't exist it will show Fatal Error;
?>
<?php 
$err_messge = '';
$name = $email = $gender = $address = $comment = '';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST['f_name'])){
            $err_messge = "<span style='color:red;'>This field must not empty</span>";  
        }elseif(!empty ($_POST['f_name'])) {
            $name = validate($_POST['f_name']);
        }else{
            echo "The name is not empty";
        }
        if(!empty($_POST['email'])){
            $email = validate($_POST['email']);
        }else{
            echo "The email field is empty";
        }
        if(!empty($_POST['gender'])){
            $gender = validate($_POST['gender']); 
        } else {
            echo "Select gender";
        }
        if(!empty($_POST['address'])){
            $address = validate($_POST['address']);
        }else{
            echo "Address field is empty";
        }
        if(!empty($_POST['comment'])){
            $comment = validate($_POST['comment']);
        }else{
            echo "Comment field is empty";
        }
        echo $name;
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
                    <h3> Our code goes here....  </h3>
                    <?php
                        //echo "Your name is ".$name;
                    ?>
                    
                    <p style="color: red;">*  Required Field</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <table>
                            <tr>
                                <td><label for="1"> Full Name</label></td>
                                <td><input type="text" name="f_name" id="1" />* <?php echo $err_messge;?></td>
                            </tr>
                            <tr>
                                <td><label for="2"> Email</label></td>
                                <td><input type="text" name="email" id="2" required="1" />*</td>
                            </tr>
                            <tr>
                                <td><label for="3"> Phone</label></td>
                                <td><input type="text" name="email" id="3" required="1" />*</td>
                            </tr>
                            <tr>
                                <td><label for="4"> Website</label></td>
                                <td><input type="text" name="email" id="4" required="1" />*</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><input type="radio" name="gender" checked="checked" required="1" value="Male"  />Male <input type="radio" name="gender" value="Female"  />Female</td>
                            </tr>
                            <tr>
                                <td><label for="5"> Address</label></td>
                                <td><input type="text" name="address" id="5" required="1" />*</td>
                            </tr>
                            <tr>
                                <td><label for="6"> Comment</label></td>
                                <td><textarea name="comment" rows="7" cols="50" required="1" id="6"></textarea>*</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Submit" /><input type="reset" value="Clear" /></td>
                            </tr>
                        </table>
                    </form>
                    
                    <?php
                    
                        /*echo "<pre>";
                        print_r($_SERVER);
                        echo "</pre>";
                        echo $_SERVER['HTTP_USER_AGENT'];
                         
                        echo "<br />";
                        for($i=1; $i<=10; $i++){
                            echo "The number is ".$i."<br/>";
                        }  */
                    ?>
                   


                </div>

            </div>

<?php 
//include 'footer.php';
//require 'footer.php'; // if php page doesn't exist it will show Fatal Error;
//include_once 'footer.php';
require_once 'footer.php'; // if php page doesn't exist it will show Fatal Error;
?>