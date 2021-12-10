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
           <?php
            $date = '2021-12-10';
            $newDate = new DateTime($date);
            ?>
            <p>Date: <?php echo $newDate ->format ('jS F Y') ?> </p><br>
        </form>
<input type="file" id="recommend">
<textarea style="width:900px;height: 600px" id="output"></textarea>
<script>
var input = document.getElementById("recommend");
var output = document.getElementById("output");

input.addEventListener("change", function () {
  if (this.files && this.files[0]) {
    var recommend = this.files[0];
    var reader = new FileReader();

    reader.addEventListener('load', function (e) {
      output.textContent = e.target.result;
    });

    reader.readAsBinaryString(recommend);
  }
});
</script>
    </body>
</html>