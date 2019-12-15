<?php include './views/partials/header.php' ?>

<? if(!empty($info_cip_bdpm) || !empty($info_cis_bdpm)): ?>

<? foreach($info_cis_bdpm as $index=>$medicament): ?>
    <div class="containerCardMedic">
        <div class="cardMedic">
            <div class="medic">
                <a href="<?= URL.'medicament/'.$code_cip[$index]->code_cip13 ?>"><?= $medicament->denomination_medicament ?></a>
            </div>
        </div>
    </div>
<? endforeach; ?>

<? else: ?>
    <main>
        <h1>SORRY RIEN TROUVER GROS</h1>
    </main>
<? endif; ?>

<?php include './views/partials/footer.php' ?>