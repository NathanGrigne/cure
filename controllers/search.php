<?php

//set title
$title = 'Search';

//Check if the form with CIP code is send
if(!empty($_POST['research-code'])){
    $cip_code = $_POST['research-code'];
    header('Location: '.URL.'medicament/'.$cip_code);
}

//Check if the form with name is send
else if(!empty($_POST['research-name'])){
    $name = $_POST['research-name'];
    header('Location: '.URL.'medicament/'.$name);
}

//include view search page
include 'views/pages/search.php';