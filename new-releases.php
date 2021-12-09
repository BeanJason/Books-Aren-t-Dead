<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Books Aren't Dead.com</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href="Style/main.css">
        <script src="js/react.js"></script>
        <script src="js/react-dom.js"></script>
    </head>
    <?php include "./templates/header.php" ?>
    <body>
         <?php include "./templates/body.php"?>
        <div id="logo"> </div>
        <script type = "text/javascript">
            /* React code */
            let h1 = React.createElement('h1',null, "Books Aren't Dead!");
        </script>
        <!-- <nav>
            <a href="index.html">Home</a>
            <a href="new-releases.html">New Releases</a>
            <a href="newsletter.html">Newsletter</a>
            <a href="best-sellers.html">Best Sellers</a>
            <a href="recommend.html">Recommendations</a>
        </nav>     -->
        
        <form action="processes.php" method="post">
            <label>username: </label>
            <input type="text" name="username"><br>
            <label>password: </label>
            <input type="text" name="password"><br>
            <br>
        </form>
    </body>
</html>