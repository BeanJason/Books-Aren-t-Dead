<?php
    require_once('database.php');

    $Recommend = filter_input(INPUT_POST, 'Recommend');

    $queryUsers = "SELECT * FROM recommendation WHERE Recommend=:Recommend";
    $execStatement = $db->prepare($queryUsers);
    $execStatement->bindValue(':Recommend', $Recommend);
    $execStatement->execute();

    $postlist = $execStatement->fetchAll();
    $postRowCount = $execStatement->rowCount();
    $execStatement->closeCursor();

    if($postRowCount == 0)
    {
        $queryInsert = 'INSERT INTO recommenda(Recommend)
        VALUES (Recommend)';

        $insertStatement = $db->prepare($queryInsert);
        $insertStatement->bindValue(':Recommend', $Recommend);

        $insertStatement->execute();
    }

?>