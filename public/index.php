<?php
require '../database/database.php';
/**
 * Routing
 */
define ('URL','http://localhost:8888/');

//Get q param
$q = !empty($_GET['q']) ? $_GET['q'] : 'welcome';
//define controller
$controller = '404';

if($q == 'welcome')
{$controller = 'welcome';} 
else if ($q == 'home')
{$controller = 'home';} 
else if ($q == 'contact')
{$controller = 'contact';}
else if ($q == 'team')
{$controller = 'team';}

 
//include controller
include '../controllers/'.$controller.'.php';