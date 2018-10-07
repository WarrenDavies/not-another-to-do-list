<?php
require 'database/connection.php';
require 'database/QueryBuilder.php';
require 'functions.php';
require 'classes.php';


$pdo = connection::make();
$query = new QueryBuilder($pdo);
$areas = $query->fetchAll('Area', 'Areas', $pdo);
$actions = $query->fetchAll('Action', 'Actions', $pdo);
$projects = $query->fetchAllProjects($pdo);
$goals = $query->fetchAllGoals($pdo);