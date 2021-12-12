<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  </head>
  <body>
    <?php include "./templates/header.php" ?>
    <?php include "./templates/body.php"?>
    <br>
    <h1>Recommendations</h1>
    <h3>2021 Top Picks</h3> <br>
    <p>The Lyrics <br>
    Call Us What We Carry <br>
    The 1619 Project <br>
    Under the Whispering Door <br>
    The Sentence</p><br>
  <?php 
    $date = '';
    $newDate = new DateTime($date);
  ?>
    <p>Date: <?php echo $newDate ->format ('jS F Y') ?> </p><br>
    <h3>Holiday Favorites</h3> <br>
    <p>A Christmas Carol <br>
    How the Grinch Stole Christmas <br>
    The Night Before Christmas <br>
    Polar Express <br>
    </p><br>
    <p> Posted: 11th December 2021 </p>
    </body>
</html>