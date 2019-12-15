<?php
$title = 'Search';

if(!empty($_POST['research-code'])){
    $cip_code = $_POST['research-code'];
    header('Location: '.URL.'medicament/'.$cip_code);
}

else if(!empty($_POST['research-name'])){
    $name = $_POST['research-name'];
    header('Location: '.URL.'medicament/'.$name);
}

include 'views/pages/search.php';