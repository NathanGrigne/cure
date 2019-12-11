<?php include '../views/partials/header.php' ?>

<main>
    <?php foreach($medocs as $index=>$_medocs): ?>
    <div class="aled">
        <h3><?= $name[$index]->denomination_medicament ?></h3>
        <p><?= $_medocs->code_cip13 ?></p>
    </div>
    <?php endforeach; ?>
</main>

<?php include '../views/partials/footer.php' ?>