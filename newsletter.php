
         <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
</head>
<body>
         <?php include "./templates/header.php" ?>
         <?php include "./templates/body.php"?>

         <br>
         <h1>Newsletter</h1>
         <h3>Holiday Sale!!</h3> <br>
        <p>We will have a sale going on this holiday season, all your favorite classics 25% off till the new year begins.</p><br>
            <?php 
            $date = '2021-12-09';
            $newDate = new DateTime($date);
            ?>
            <p>Date: <?php echo $newDate ->format ('jS F Y') ?> </p><br>
        <h3>Black Friday Deals</h3> <br>
        <p>Don't miss out! Buy one get one free on all top picks!</p><br>
            <p> Date: 26th November 2021 </p>
    </body>
</html>