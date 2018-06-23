<?php
include_once 'header.php'; // if php page doesn't exist it will show Fatal Error;
?>
<?php
    $number1 = $number2 = $addition = $substaction = $multi = $div = $div_err = '';
    if(isset($_POST['sub'])){
        if(array_key_exists('num1', $_POST) && !empty($_POST['num1']) OR $_POST['num1'] == '0' AND array_key_exists('num2', $_POST) && !empty($_POST['num2']) OR $_POST['num2'] == '0' ){
            $number1 = $_POST['num1'];
            $number2 = $_POST['num2'];
        }
        if(!empty($number1) && !empty($number2) OR $number1 == '0' OR $number2 == '0'){
            if($_POST['calc_num'] == 'plus'){
                $addition = $number1 + $number2;
            }elseif ($_POST['calc_num'] == 'minus') {
                $substaction = $number1 - $number2;
            }elseif ($_POST['calc_num'] == 'divi') {
                if($number1 == '0' && $number2 >'0') {
                    $div = '0';
                }elseif($_POST['num2'] != '0'){
                    $div = $number1 / $number2;
                }elseif($_POST['num2'] == '0'){
                    $div = "Undefined";
                    $div_err = "<span style='color:red;'>You can't divide by 0 (Zero)</span>";
                }
            }elseif($_POST['calc_num'] == 'multi'){
                if($_POST['num1'] == '0' OR $_POST['num2'] == '0'){
                    $multi = '0';
                }else{
                    $multi = $number1 * $number2;
                }   
            }
        }
        
        //echo $number1."<br />";
        //echo $number2;
    }
?>
<div class="container">
    <div class="our_cont">
        <h3> Our code goes here....  </h3>
        <h3>Calculation</h3>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <fieldset>
                <legend>Make your calculation</legend>
                <p>
                    <label for="1">First Number: </label>
                    <input type="number" name="num1" id="1" placeholder="Type your number like 10"/>
                </p>
                Select your operator
                <select name="calc_num"> 
                    <option value="plus"> + </option>
                    <option value="minus"> - </option>
                    <option value="divi"> / </option>
                    <option value="multi"> * </option>
                </select>
                <p>
                    <label for="2"> Second Number: </label>
                    <input type="number" name="num2" id="2" placeholder="Type your number like 20"/> <?php echo $div_err;?>
                </p>
                <p>
                    <input type="submit" name="sub" value="Calculate" />
                </p>
                <?php

                    if(!empty($number1) && !empty($number2) OR $number1 == '0' OR $number2 == '0'){
                        echo "Your first number is: $number1"."<br />";
                        echo "Your second number is: $number2"."<br />";
                    }
                    if(!empty($addition) OR $addition == '0'){
                        echo "The addition is: ".$addition."<br />";
                    }elseif (!empty($substaction) OR $substaction == '0') {
                        echo "The substaction is: ".$substaction."<br />";
                    }elseif (!empty($div) OR $div == '0') {
                        echo "The divition is: ".$div."<br />";
                    }elseif(!empty($multi) OR $multi == '0'){
                        echo "The multiplication is: ".$multi;
                    }
                ?>
            </fieldset>
        </form>
        <div>
        </div>   
    </div>
</div>

<?php
include_once 'footer.php'; // if php page doesn't exist it will show Fatal Error;
?>