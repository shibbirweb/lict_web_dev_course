<?php
include_once 'header.php'; // if php page doesn't exist it will show Fatal Error;
?>
<?php
    $number1 = $number2 = $addition = $substaction = $multi = $div = '';
    if(isset($_POST['sub'])){
        if(array_key_exists('num1', $_POST) && !empty($_POST['num1']) AND array_key_exists('num2', $_POST) && !empty($_POST['num2'])){
            $number1 = $_POST['num1'];
            $number2 = $_POST['num2'];
        }
        if(!empty($number1) && !empty($number2)){
            if($_POST['calc_num'] == 'plus'){
                $addition = $number1 + $number2;
            }
            
            $substaction = $number1 - $number2;
            $multi = $number1 * $number2;
            $div = $number1 / $number2;
        }
        
        //echo $number1."<br />";
        //echo $number2;
        if(!empty($number1) && !empty($number2)){
            echo "Your first number is $number1"."<br />";
            echo "The second number is $number2"."<br />";
        }
        if(!empty($addition)){
            echo "The addition is: ".$addition."<br />";
        }elseif (!empty($substaction)) {
            echo "The substaction is: ".$substaction."<br />";
        }elseif (!empty($multi)) {
            echo "The multiplication is: ".$multi."<br />";
        }else{
            echo "The divition is: ".$div;
        }
    }
?>

        <p>Click here to go to <a href="home.php">test page</a></p>
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
                    <input type="number" name="num2" id="2" placeholder="Type your number like 20"/>
                </p>
                <p>
                    <input type="submit" name="sub" value="Calculate" />
                </p>
            </fieldset>
        </form>
        
        <div>
            
        </div>
        
        
        
        
        
        


<?php
include_once 'footer.php'; // if php page doesn't exist it will show Fatal Error;
?>