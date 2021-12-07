<?php
    require_once('database.php');

    $id= filter_input(INPUT_POST, 'userId');

    $username = filter_input(INPUT_POST, 'userName');
    $passwords = filter_input(INPUT_POST, 'user_Password');
    $userAddress = filter_input(INPUT_POST, 'user_Address');
    $zipcode = filter_input(INPUT_POST, 'user_zipcode');

    $queryUsers = "SELECT * FROM user WHERE id=:userId";

    $execStatement = $db->prepare($queryUsers);
    $execStatement->bindValue(':userId', $id);

    $execStatement->execute();

    $userList = $execStatement->fetchAll();
    $userRowCount = $execStatement->rowCount();
    $execStatement->closeCursor();

    if($userRowCount == 0)
    {
        $queryInsert = 'INSERT INTO user(id, username, passwords, userAddress, zipcode)
        VALUES (:userId, :userName, :user_Password, :user_Address, :user_zipcode)';

        $insertStatement = $db->prepare($queryInsert);
        $insertStatement->bindValue(':userId', $id);
        $insertStatement->bindValue(':userName', $username);
        $insertStatement->bindValue(':user_Password', $passwords);
        $insertStatement->bindValue(':user_Address', $userAddress);
        $insertStatement->bindValue(':user_zipcode', $zipcode);

        $insertStatement->execute();
    }

?>

