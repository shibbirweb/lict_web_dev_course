<?php
 include 'lib/app.php';
 include 'header.php';

    if(array_key_exists('session_data', $_SESSION)){
        $data = $_SESSION['session_data'][$_GET['id']];
    }
 
     $optPhp = $optJava = $optHtml = "";
    if(isset($data) && !empty($data)){
        if($data['phpCoding'] == "phpCoding"){
            $optPhp = "checked = 'checked'";
        }
        if($data['javaCoding'] == "javaCoding"){
            $optJava = "checked = 'checked'";
        }
        if($data['htmlMarkup'] == "htmlMarkup"){
            $optHtml = "checked = 'checked'";
        }
    }
 
 
 ?>

<form action="store.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
    <p>
        <label>Name</label>
        <input type="name" name="name" placeholder="Type name" value="<?php if(array_key_exists('name', $data)){     echo $data['name'];} ?>"/>
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


<?php
 include_once 'footer.php';
?>