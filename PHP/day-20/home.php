<?php
include_once 'header.php';
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST) == 'form_sub'){
        if(array_key_exists('f_name', $_POST) && !empty($_POST['f_name'])){
        $name = $_POST['f_name'];
        echo $name . "<br/>";
        }
        if(array_key_exists('gender', $_POST) && !empty($_POST['gender'])){
            $gender = $_POST['gender'];
            echo $gender . "<br/>";
        }
        if(array_key_exists('hobby', $_POST) && !empty($_POST['hobby'])){
            $hobby = $_POST['hobby'];
            foreach ($hobby as $hob){
            echo $hob . ", ";
        }
        }
        $address = $_POST['address'];
        $email = $_POST['email'];


        echo $address . "<br/>";
        echo $email . "<br/>";
    }  
}

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <p> * Required Field</p>
    <p>
        <label>*Name</label>
        <input type="text" name="f_name" />
    </p>
    <p>
        <label>*Address</label>
        <input type="text" name="address" />
    </p>
    <p>
        <label>*Email</label>
        <input type="text" name="email" />
    </p> 
    <p>
        <label>Gender</label>
        <input type="radio" name="gender" value="Male" />Male
        <input type="radio" name="gender" value="Female" />Female
    </p>
    <p>
        <label>Hobbies</label>
        <input type="checkbox" name="hobby[]" value="Coding" /> Coding
        <input type="checkbox" name="hobby[]" value="Watching" /> Watching
        <input type="checkbox" name="hobby[]" value="Swimming" /> Swimming
    </p>
    <p>
        <input type="submit" name="form_sub" />
    </p>
</form>
<?php
include_once 'footer.php'
?>