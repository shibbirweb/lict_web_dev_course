<?php
include_once 'header.php';

?>

<form action="add.php" method="POST">
    <fieldset>
        
        <p>
            <label for="1">    Name          </label>
            <input type="text" name="full_name" id="1"/>
        </p>
        <p>Gender
            <label for="3"> Male</label>
            <input type="radio" name="gender" value="Male" id="3"/>
            <label for="4"> FeMale</label>
            <input type="radio" name="gender" value="Female" id="4"/>
        </p>
        <p>
            <label for="2">    Password          </label>
            <input type="text" name="pass_word" id="2"/>
        </p>
        
        <p>
            <label for="5"> Age:</label>
            <input type="text" name="age" id="5"/>
        </p>
        <p>
            <label for="6"> City:</label>
            <input type="text" name="city" id="6"/>
        </p>
         <p>
             <label for="7"> Division:</label>
            <input type="text" name="division" id="7"/>
        </p>
        <p> <input type="reset"/> <input type="submit" value="send_info"/>
    </fieldset>
</form>


<?php
include_once 'footer.php';
