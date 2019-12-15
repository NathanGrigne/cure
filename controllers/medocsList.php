<?php
$title = 'MedocsList';

$name = basename($_GET['q']);

$info_cis_bdpm = $pdo->query('SELECT code_cis, denomination_medicament FROM cis_bdpm WHERE denomination_medicament LIKE "%'.$name.'%" LIMIT 25');
$info_cis_bdpm = $info_cis_bdpm->fetchAll();

$code_cip = [];

if(!empty($info_cis_bdpm)){

    foreach($info_cis_bdpm as $code_cis){
        $info_cip_bdpm = $pdo->query('SELECT code_cip13 FROM cis_cip_bdpm WHERE code_cis = '.$code_cis->code_cis);

        $info_cip_bdpm = $info_cip_bdpm->fetch();

        array_push($code_cip, $info_cip_bdpm);
    }
}

include 'views/pages/medocsList.php';