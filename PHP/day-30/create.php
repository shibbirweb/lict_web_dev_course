<h3> <a href="index.php">Click</a> here to see the existing list.</h3>

<form action="add.php" method="POST">
    <p> 
        <label for="nm"> Name</label>
        <input type="text" name="full_name" id="nm"/>
    </p>
    <fieldset>
        <legend> User Hobbies</legend>  
        <p>
            <input type="checkbox" name="code" value="coding"/>
            I like to code
        </p>
        <p>
            <input type="checkbox" name="garden" value="gardening"/>
            I like to garden
        </p>
        <p>
            <input type="checkbox" name="facebook" value="facebooking"/>
            I like to browse facebook
        </p>
        
        <input type="submit" value="Send info"/>
    </fieldset>
    
</form>
