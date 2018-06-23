<?php
include_once 'lib/app.php';

  if(array_key_exists('id', $_GET)){
        $data = findone($_GET['id']);
    }
    
 debug($data);
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

<dl>
    <dd>
        <?php
            if(array_key_exists('phpCoding', $data)){
                echo "<p> <input type='checkbox' $optPhp /> PHP Coding </p>";
            }
        ?>
    </dd>
    <dd>
        <?php
            if(array_key_exists('javaCoding', $data)){
                echo "<p> <input type='checkbox' $optJava /> Java Coding </p>";
            }
        ?>
    </dd>
    <dd>
        <?php
            if(array_key_exists('htmlMarkup', $data)){
                echo "<p> <input type='checkbox' $optHtml /> HTML Markup </p>";
            }
        ?>
    </dd>
</dl>