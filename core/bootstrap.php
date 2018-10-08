<?php
$config = require 'config.php';

require 'core/router.php';
require 'database/connection.php';
require 'database/QueryBuilder.php';
require 'functions.php';
require 'classes.php';

$pdo = connection::make($config['database']);
$query = new QueryBuilder($pdo);
