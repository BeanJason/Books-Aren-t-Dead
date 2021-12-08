<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Books Aren't Dead.com</title>
        <meta charset="utf-8">
        <script src="js/react.js"></script>
        <script src="js/react-dom.js"></script>
        <script src="js/navbar.js"></script>
        <link rel="stylesheet" type="text/css" href="./Style/main.css" />
        <link rel="stylesheet" type="text/css" href="./Style/nav-bar.css" />
    </head>
    <header>
        <h1>Books Aren't Dead!</h1>
        <form id="login" action="login.php" method="post">
            <label for="userName">username: </label>
            <input type="text" is="userName" name="userName"><br>
            <label for="user_Password">password: </label>
            <input type="password" id="user_Password" name="user_Password"><br>
            <br>
            <input type="submit" value="Login">
            <button type="button" id="sign-up">Sign-up</button> 
        </form>
        
    </header>
    <body>
        <div id="logo"></div>
        <script type = "text/javascript">
            /* React code */
            let h1 = React.createElement('h1',null, "Books Aren't Dead!");
        </script>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="new-releases.html">New Releases</a></li>
                <li><a href="newsletter.html">Newsletter</a></li>
                <li><a href="best-sellers.html">Best Sellers</a></li>
            </ul>
         </nav>     -->
         <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
</head>
<body>
         <?php include "./templates/header.html" ?>
         <?php include "./templates/body.html"?>

        <form action="addUser.php" method="post">
            <label for="userId">userId: </label>
            <input type="text" id="userId" name="userId"><br>
            <label for="userName">username: </label>
            <input type="text" is="userName" name="userName"><br>
            <label for="user_Password">password: </label>
            <input type="password" id="user_Password" name="user_Password"><br>
            <label for="user_Address">address: </label>
            <input type="text" id="user_Address" name="user_Address"><br>
            <label for="user_zipcode">zipcode: </label>
            <input type="text" id="user_zipcode" name="user_zipcode"><br>
            <br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>