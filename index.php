<?php
require 'functions.php';
require 'Task.php';
require 'Area.php';

$pdo = connectToDB();

$areas = fetchAllAreas($pdo);
$goals = fetchAllTasks($pdo);
$tasks = fetchAllTasks($pdo);

require 'index.view.php';