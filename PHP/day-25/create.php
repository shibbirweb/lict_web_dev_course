<h3><a href="index.php">Click here</a> to see the list</h3>
<form action="add.php" method="POST">
    <fieldset>
        <legend>User Info</legend>
        <p>
            <label>Name:</label>
            <input type="text" name="nm" autofocus="autofocus" />
        </p>
        <p>
            <label> E-mail </label>
            <input type="email" name="per_email" />
        </p>
        <p>
            <label>Gender</label>
            <input type="radio" name="gender" value="Male" /> Male
            <input type="radio" name="gender" value="Female" /> Female
        </p>
        <input type="submit" name="sub" value="Send Info" />
    </fieldset>
</form>
