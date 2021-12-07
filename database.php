<!-- This is used to gain access to our db I give it the username and password used to login to our db which I setup
lecture 10 around 1:50:00 -->

<?php

    $dataSourceName = "mysql:host=localhost;dbname=usersdb";
    $username= 'admin';
    $password= 'password';

    try {
        $db = new PDO($dataSourceName, $username, $password);
    }
    catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo 'User does not exist' . $error_message;
        exit();
    }
?>