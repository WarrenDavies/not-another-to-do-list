<?php
require 'functions.php';
require 'classes.php';

$pdo = connectToDB();

$areas = fetchAllAreas($pdo);
$goals = fetchAllGoals($pdo);
$physicalgoals = fetchPhysicalGoals($pdo);
$actions = fetchAllActions($pdo);


foreach ($goals as $goal) { 
   // distribute goals into their relevant array
}


require 'index.view.php';