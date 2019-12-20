<?php

//Define location where find the database
define('DB_HOST', 'localhost');
define('DB_PORT', '8889');
define('DB_PASS', 'root');
define('DB_USER', 'root');
define('DB_NAME', 'medocs');


try
{
    $pdo = new PDO(
        'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT.';charset=utf8',
        DB_USER,
        DB_PASS
    );

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e)
{
    die('Cannot connect');
}