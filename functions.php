<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}



function fetchAllActions($pdo) {
    $statement = $pdo->prepare('select * from actions');
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS, 'Action');
}

function fetchAllAreas($pdo) {
    $statement = $pdo->prepare('select * from areas');
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS, 'Area');
}

function fetchAllGoals($pdo) {
    $statement = $pdo-> prepare(
        'select g.name, g.id, g.completed, a.id AreaID
        from goals g
        inner join GoalAreas ga
            on g.id = ga.GoalID
        inner join Areas a
            on ga.AreaID = a.id;'
            );
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS, 'Goal');
}