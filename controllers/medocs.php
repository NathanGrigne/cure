<?php

//set title
$title = 'Medocs';

$cip_code = basename($_GET['q']);

//Set variable, browse database cis_cip_bdpm
$info_cip_bdpm = $pdo->query('SELECT * FROM cis_cip_bdpm WHERE code_cip13 = '.$cip_code.' LIMIT 1');
$info_cip_bdpm = $info_cip_bdpm->fetch(); 

//Check if cip_code is find
if(!empty($info_cip_bdpm)){
    $cis_code = $info_cip_bdpm->code_cis;

    //Set variable, browse database cis_bdpm
    $info_cis_bdpm = $pdo->query('SELECT * FROM cis_bdpm WHERE code_cis = '.$cis_code.' LIMIT 1');
    $info_cis_bdpm = $info_cis_bdpm->fetch();

    $name_medoc = explode(',', $info_cis_bdpm->denomination_medicament);
    $info_cis_bdpm->denomination_medicament = $name_medoc[0];

    //Set variable, browse database utilisation
    $utilisations = $pdo->query('SELECT * FROM utilisations WHERE code_cis = '.$cis_code.' LIMIT 1');
    $utilisations = $utilisations->fetch();
}

//include view medocs page
include 'views/pages/medocs.php';