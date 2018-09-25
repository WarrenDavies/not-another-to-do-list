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

function fetchAllTasks($pdo) {
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS, 'Task');
}

function fetchAllGoals($pdo) {
    $statement = $pdo->prepare('select * from areas');
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS, 'Goal');
}

function fetchAllAreas($pdo) {
    $statement = $pdo->prepare('select * from areas');
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS, 'Area');
}