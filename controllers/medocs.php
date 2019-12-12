<?php
$title = 'Medocs';

$medocs = $pdo->query('SELECT * FROM cis_cip_bdpm LIMIT 10');
$medocs = $medocs->fetchAll();

$name = [];

foreach($medocs as $_medocs){
    $code_cis = $_medocs->code_cis;
    $temp = $pdo->query('SELECT denomination_medicament FROM cis_bdpm WHERE code_cis='.$code_cis);
    $temp = $temp->fetch();
    array_push($name, $temp);
};

include '../views/pages/medocs.php';