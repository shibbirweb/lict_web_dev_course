<?php
$add = $sub = $mul = $div = '';

function __autoload($className) {
    require_once 'class/' . $className . '.php';
}

$objAdd = new Add();
$objSub = new Substract();
$objMul = new Multiplication();
$objDiv = new Division();
if (isset($_POST['calculate'])) {
    $firstValue = $_POST['firstValue'];
    $secondValue = $_POST['secondValue'];

    $add = $objAdd->addition($firstValue, $secondValue);
    $sub = $objSub->substraction($firstValue, $secondValue);
    $mul = $objMul->multiple($firstValue, $secondValue);
    $div = $objDiv->div($firstValue, $secondValue);
}
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Calculator Using OOP</title>
    </head>
    <body>
        <h1 style="text-align: center">Calculator</h1>
        <form action="" method="POST">
            <fieldset>
                <legend>Input Form</legend>
                <table>
                    <tr>
                        <td><label for="firstValue">First Value</label></td>
                        <td><input type="number" name="firstValue" id="firstValue" /></td>
                    </tr>
                    <tr>
                        <td><label for="secondValue">Second Value</label></td>
                        <td><input type="number" name="secondValue" id="secondValue" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="calculate" value="Calculate" /> </td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <?php
        if ($add != '') {
            ?>
        <fieldset>
            <legend>You entered</legend>
            <p>First Value <?php echo $firstValue?></p>
            <p>Second Value <?php echo $secondValue?></p>
        </fieldset>
            <fieldset>
                <legend>Result</legend>
                <p>Addition is <?php echo $add; ?></p>
                <p>Substaction is <?php echo $sub; ?></p>
                <p>Multiplication is <?php echo $mul; ?></p>
                <p>Divition is <?php echo $div; ?></p>
            </fieldset>
    <?php
}
?>
    </body>
</html>