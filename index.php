<?php
require 'functions.php';
require 'classes.php';

$pdo = connectToDB();

$areas = fetchAllAreas($pdo);
$goals = fetchAllGoals($pdo);
$actions = fetchAllActions($pdo);


foreach ($areas as $area) { 
   foreach ($goals as $goal) {

   }
}


require 'index.view.php';