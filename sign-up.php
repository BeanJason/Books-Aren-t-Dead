         <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
</head>
<body>
         <?php include "./templates/header.php" ?>
         <?php include "./templates/body.php"?>

         <h1>Sign Up</h1>
        <form action="addUser.php" method="post">
            <label for="userId">userId: </label>
            <input type="text" id="userId" name="userId" placeholder="shouldn't be here"><br>
            <label for="userName">username: </label>
            <input type="text" is="userName" name="userName" placeholder="username"><br>
            <label for="user_Password">password: </label>
            <input type="password" id="user_Password" name="user_Password" placeholder="password"><br>
            <label for="user_Address">address: </label>
            <input type="text" id="user_Address" name="user_Address" placeholder="address"><br>
            <label for="user_zipcode">zipcode: </label>
            <input type="text" id="user_zipcode" name="user_zipcode" placeholder="zipcode"><br>
            <br>
            <input type="submit" value="submit">
        </form>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "existingUser"){
                    echo "<p>Error: user already exists </p>";
                }
            }
            else if(isset($_GET["noError"])){
                echo "<p>Account created! Welcome!</p>";
            }

        ?>
    </body>
</html>