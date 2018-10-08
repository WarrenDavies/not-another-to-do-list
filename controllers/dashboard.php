<?php
$areas = $query->fetchAll('Area', 'Areas', $pdo);
$actions = $query->fetchAll('Action', 'Actions', $pdo);
$projects = $query->fetchAllProjects($pdo);
$goals = $query->fetchAllGoals($pdo);
require 'views/dashboard.view.php';