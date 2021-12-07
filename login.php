<?php
    $username = htmlSpecialChars($_POST['username']);
    $password = htmlSpecialChars($_POST['password']);
?>

<html lang="en" dir="ltr">
    <head>
        <title>Processed login</title>
        <meta charset="utf-8">
</head>
<body>
    <?php echo "<h1>Welcome $username</h1>" ?>
</body>
</html>