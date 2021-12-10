<?php
    require_once('database.php');

    $id= filter_input(INPUT_POST, 'id');

    $Post = filter_input(INPUT_POST, 'Post');

    $queryUsers = "SELECT * FROM newsletter WHERE Post=:Post";
    $execStatement = $db->prepare($queryUsers);
    $execStatement->bindValue(':Post', $Post);
    $execStatement->execute();

    $postlist = $execStatement->fetchAll();
    $postRowCount = $execStatement->rowCount();
    $execStatement->closeCursor();

    if($postRowCount == 0)
    {
        $queryInsert = 'INSERT INTO newsletter(id, Post)
        VALUES (:id, :Post)';

        $insertStatement = $db->prepare($queryInsert);
        $insertStatement->bindValue(':id', $id);
        $insertStatement->bindValue(':Post', $Post);

        $insertStatement->execute();
    }

?>