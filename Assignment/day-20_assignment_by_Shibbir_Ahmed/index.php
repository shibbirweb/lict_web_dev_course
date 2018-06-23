<?php
include_once 'header.php';
?>
<?php
    $number1 = $number2 = $addition = $substaction = $multi = $divi = $div_err = '';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(array_key_exists('num1', $_POST) AND !empty($_POST['num1']) OR $_POST['num1'] == '0' AND array_key_exists('num2', $_POST) AND !empty($_POST['num2']) OR $_POST['num2'] == '0'){
            $number1 = $_POST['num1'];
            $number2 = $_POST['num2'];
        }
        if(!empty($number1) AND !empty($number2) OR $number1 == '0' OR $number2 == '0'){
            if($_POST['operator'] == 'plus'){
                $addition = $number1 + $number2;
            }elseif ($_POST['operator'] == 'minus') {
                $substaction =  $number1 - $number2;
            }elseif ($_POST['operator'] == 'multi') {
                $multi = $number1 * $number2;
            }elseif ($_POST['operator'] == 'divi') {
                if($number2 == '0'){
                    $divi = "Undefined";
                    $div_err = "<span style='color:red;'>You can't divide by zero</span>";
                }else{
                $divi = $number1 / $number2;
                }
            }
        }
    }
    
?>

        <p style="font-size: 40px;">Click here to go to <a href="home.php" style="color: red; text-decoration: none;">Assignment Page</a></p>
        <h3>Calculation</h3>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <fieldset>
                <legend>Make your simple calculation</legend>
                <p>
                    <label for="1">Enter First Number</label>
                    <input type="number" name="num1" id="1" placeholder="Enter number">
                </p>
                <p>
                    <label for="opt">Select Your operator</label>
                    <select name="operator" id="opt">
                        <option value="plus">+</option>
                        <option value="minus">-</option>
                        <option value="multi">*</option>
                        <option value="divi">/</option>
                    </select>
                </p>
                <p>
                    <label for="2">Enter Second Number</label>
                    <input type="number" name="num2" id="2" placeholder="Enter number"> <?php echo $div_err;?>
                </p>
                <p>
                    <input type="submit" name="subm" value="Submit"> <input type="reset" value="Clear Field">
                </p>
            </fieldset>
        </form>      
        <div>
            <?php
                if(!empty($number1) && !empty($number2) || $number1 == '0' || $number2 == '0'){
                    echo "
                        <fieldset>
                            <legend>Your Result</legend>
                            Your First Number is $number1 <br/>
                            Your Second Number is $number2 <br/>
                ";
                    if(!empty($addition) || $addition == '0'){
                        echo "Additoin is: $addition <br/>";
                    }elseif (!empty($substaction) || $substaction == '0') {
                        echo "Substaction is: $substaction <br />";
                    }elseif (!empty($multi) || $multi == '0') {
                        echo "Multiplication is: $multi <br/>";
                    }elseif (!empty($divi) || $divi == '0') {
                        echo "Divition is: $divi <br/>";
                    }
                    echo "</fieldset>";
                }  

            ?>
        </div>
        
        
        
        
        
        


<?php
include_once 'footer.php';
?>