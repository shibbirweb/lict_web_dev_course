<?php
include 'header.php';
?>
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
<?php
include 'footer.php';
?>
