<?php
include_once 'lib/app.php';
?>
<h3> <a href="index.php">Click</a> here to see the existing list.</h3>

<form action="add.php" method="POST">
    <p>
        <label>Name</label>
        <input type="name" name="name" placeholder="Type name" />
        <span>
            <?php
                if(isset($_SESSION['nameErr'])){
                    echo $_SESSION['nameErr'];
                    unset($_SESSION['nameErr']);
                }
            ?>
        </span>
    </p>
    <fieldset>
        <legend>User Hobby</legend>
        <p>
            <?php
                if(isset($_SESSION['hobbyErr'])){
                    echo $_SESSION['hobbyErr'];
                    unset($_SESSION['hobbyErr']);
                }
            ?>
        </p>
        <p>
            <input type="checkbox" name="phpCoding" value="phpCoding"/> PHP Coding
        </p>
        <p>
            <input type="checkbox" name="javaCoding" value="javaCoding"/>Java Coding
        </p>
        <p>
            <input type="checkbox" name="htmlMarkup" value="htmlMarkup"/>HTML Markup
        </p>
    </fieldset>
    <input type="submit" value="Submit" name="submit"/>
</form>
