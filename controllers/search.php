<?php
$title = 'Search';

$cip_code = $pdo->query('SELECT * FROM cis_cip_bdpm LIMIT 1');
$cip_code = $cip_code->fetch();

include 'views/pages/search.php';