<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
</head>
<body>
         <?php include "./templates/header.php" ?>
         <?php include "./templates/body.html"?>

         <br>
         <h1>Log in</h1>
         <form id="login" action="logUserIn.php" method="post">
            <label for="userName">username: </label>
            <input type="text" is="userName" name="userName"><br>
            <label for="user_Password">password: </label>
            <input type="password" id="user_Password" name="user_Password"><br>
            <br>
            <input type="submit" value="Login">
        </form>

        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "notFound"){
                    echo "<p>Error: username / password doesn't match </p>";
                }
            }
            else if(isset($_GET["noError"])){
                echo "<p>Sucessfully logged in!</p>";
            }

        ?>
        
    </body>
</html>


