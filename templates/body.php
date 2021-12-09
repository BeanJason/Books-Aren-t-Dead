<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Books Aren't Dead.com</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href="Style/main.css">
        <script src="js/react.js"></script>
        <script src="js/react-dom.js"></script>
        <script src="js/navbar.js"></script>
        <link rel="stylesheet" type="text/css" href="./Style/main.css" />
        <link rel="stylesheet" type="text/css" href="./Style/nav-bar.css" />
    </head>
<body>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="new-releases.php">New Releases</a></li>
                <li><a href="newsletter.php">Newsletter</a></li>
                <li><a href="best-sellers.php">Best Sellers</a></li>
                <li><a href="recommend.php">Recommendations</a></li>


                <?php
            if(isset($_SESSION["username"])){
                echo '<li><a href="cart.php">Cart</a></li>';
                echo '<li><a href="logout.php">Log out</a></li>';
            }
            else{
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="sign-up.php">sign-up</a></li>';
            }
        ?>
                
            </ul>
            
         </nav>  
</body>
</html>