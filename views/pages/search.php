<?php include './views/partials/header.php' ?>
    
    <main class="search">
      <canvas id="scan-zone"></canvas>
      <form>
        <input class="input-classic" type="text" name="research-name" placeholder="Entrez le nom du médicaments">
        <p>ou</p>
        <input class="input-classic" type="text" name="research-code" placeholder="Entrez le code CIP">
      </form>
      <h4><?= $cip_code->code_cip13 ?></h4>
    </main>

        
<?php include './views/partials/footer.php' ?>