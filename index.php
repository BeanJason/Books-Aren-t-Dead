<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Books Aren't Dead.com</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style/main.css">
    <script src="js/react.js"></script>
    <script src="js/react-dom.js"></script>
    <script src="js/navbar.js"></script>
    <link rel="stylesheet" type="text/css" href="./Style/main.css" />
    <link rel="stylesheet" type="text/css" href="./Style/nav-bar.css" />
</head>
<header>
    <?php include "./templates/header.php" ?>

</header>

<body>
    <?php include "./templates/body.php" ?>

    <div id="logo"></div>
    <script type="text/javascript">
        /* React code */
        let h1 = React.createElement('h1', null, "Books Aren't Dead!");
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <br><br>

    <div class="dropdown">
        <button class="dropbtn">Books</button>
        <div class="dropdown-content">
            <a href="#">Arts & Photos</a>
            <a href="#">Business</a>
            <a href="#">Romance</a>
            <a href="#">Childrens</a>
            <a href="#">Law</a>
            <a href="#">History</a>
            <a href="#">Fiction</a>
            <a href="#">Non-Fiction</a>
            <a href="#">Thriller</a>
        </div>
    </div>

    <input type="text" placeholder="Title, Author ,ISBN">
    
    <button class="cartbtn">Shopping Cart <i class="fas fa-cart-arrow-down"></i></button>


</body>

</html>