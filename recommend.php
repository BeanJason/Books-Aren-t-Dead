<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
</head>
<body>
         <?php include "./templates/header.php" ?>
         <?php include "./templates/body.php"?>

         <h1>Recommendations</h1>
        <form action="updates.php" method="post">
            <label for="Recommendation">Recommendation: </label>
            <input type="text" id="Recommend" name="Recommend" placeholder="Add Recommendation"><br>
            <input type="submit" value="submit">
            <p> Posted on Date: <?php echo date ('Y');?> </p>
        </form>
    </body>
</html>