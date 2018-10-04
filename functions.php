<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}


function connectToDB() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
    } catch(PDOException $e) {
        die('could not connect. ' . $e);
    }
}

function fetchAllActions($pdo) {
    $statement = $pdo->prepare('select * from actions');
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS, 'Action');
}

function fetchAllGoals($pdo) {
    $statement = $pdo->prepare('select * from goals');
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS, 'Goal');
}

function fetchAllAreas($pdo) {
    $statement = $pdo->prepare('select * from areas');
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS, 'Area');
}

function fetchPhysicalGoals($pdo) {
    $statement = $pdo-> prepare(
        'select *
        from goals g
        inner join GoalAreas ga
            on g.id = ga.GoalID
        inner join Areas a
            on ga.AreaID = a.id
        ');
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS, 'Goal');
}