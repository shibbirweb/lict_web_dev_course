<?php
include_once './header.php';
?>

<form action="add.php" method="POST">
    <fieldset>
        <p>
            <label for="1">Name</label>
            <input type="text" name="full_name" id="1" />
        </p>
        <p>
            Gender : 
            <label for="2">Male</label>
            <input type="radio" name="gender" value="Male" id="2" />
            <label for="3">Female</label>
            <input type="radio" name="gender" value="Female" id="3" />
        </p>
        <p>
            <input type="reset" /> <input type="submit" value="Submit"/>
        </p>
    </fieldset>
</form>



<?php
include_once './footer.php';
?>