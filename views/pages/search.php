<?php include '../views/partials/header.php' ?>
<link rel="stylesheet" href="<? URL ?>assets/styles/search.css">
    
    <main class="search">
      <canvas id="scan-zone"></canvas>
      <form>
        <input class="input-classic" type="text" name="recherch-name" placeholder="Entrez le nom du médicaments">
        <p>ou</p>
        <input class="input-classic" type="text" name="recherch-code" placeholder="Entrez le code CIP">
      </form>
    </main>

        
<?php include '../views/partials/footer.php' ?>