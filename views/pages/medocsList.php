<!--Integration header-->
<?php include './views/partials/header.php' ?>

<!--Check if variables are empty or not, if it isn't deiplay the list-->
<? if(!empty($info_cip_bdpm) || !empty($info_cis_bdpm)): ?>
<main>
    <!--Creation of a div for each medicine-->
    <? foreach($info_cis_bdpm as $index=>$medicament): ?>
        <div class="containerCardMedic">
            <div class="cardMedic">
                <div class="medic">
                    <a href="<?= URL.'medicament/'.$code_cip[$index]->code_cip13 ?>"><?= $medicament->denomination_medicament ?></a>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</main>

<!--If variables are empty, display this text-->
<? else: ?>
    <main>
        <h1>Désolé, aucun médicament ne correspond à votre recherche.</h1>
    </main>
<? endif; ?>

<!--Integration footer-->
<?php include './views/partials/footer.php' ?>