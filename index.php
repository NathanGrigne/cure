<?php
require './database/database.php';
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
else if ($q == 'search')
{$controller = 'search';}
else if ($q == 'mentions')
{$controller = 'mentions';} 
else if (preg_match('/^medicament\/[0-9]*$/', $q))
{$controller = 'medocs';}
else if (preg_match('/^medicament\/.*((\d)(?:.))?/', $q))
{$controller = 'medocsList';}

 
//include controller
include './controllers/'.$controller.'.php';