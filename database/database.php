<?php

define('DB_HOST', 'sql201.epizy.com');
define('DB_PORT', '3306');
define('DB_PASS', 'carx8HAAHbON');
define('DB_USER', 'epiz_24920363');
define('DB_NAME', 'epiz_24920363_medocs');


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