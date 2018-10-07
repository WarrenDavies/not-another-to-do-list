<?php

class QueryBuilder {

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function fetchAll($class, $table, $pdo) {
        $statement = $pdo->prepare('select * from ' . $table);
        $statement->execute();
        return $statement->fetchall(PDO::FETCH_CLASS, $class);
    }

    public function fetchAllGoals($pdo) {
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
    
    public function fetchAllProjects($pdo) {
        $statement = $pdo-> prepare(
            'select p.name, p.id, p.completed, pg.GoalID GoalID
            from projects p
            inner join ProjectGoals pg
                on p.id = pg.ProjectID'
                );
        $statement->execute();
        return $statement->fetchall(PDO::FETCH_CLASS, 'Project');
    }
}