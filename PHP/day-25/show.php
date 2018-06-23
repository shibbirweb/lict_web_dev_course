<?php
session_start();
include_once 'header.php';
if(array_key_exists('sess_data', $_SESSION) && !empty($_SESSION['sess_data'])){
    $single_data = $_SESSION['sess_data'][$_GET['id']];
}
?>
<section>
    <dl>
        <dt>Name</dt>
        <dd>
            <?php
                if(array_key_exists('nm', $single_data)){
                    echo $single_data['nm'];
                }
            ?>
        </dd>
        <dt>E-mail</dt>
        <dd>
            <?php
                if(array_key_exists('per_email', $single_data)){
                    echo $single_data['per_email'];
                }
            ?>
        </dd>
        <dt>Gender</dt>
        <dd>
            <?php
                if(array_key_exists('gender', $single_data)){
                    echo $single_data['gender'];
                }
            ?>
        </dd>
    </dl>
</section>
<hr/>
<p><a href="index.php">Click here</a> to see the list</p>
<p>Click here to create</p>
<p>Click here to Edit</p>
<p>Click here to detete</p>
<?php include_once 'footer.php';?>