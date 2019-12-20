<!--Integration header-->
<?php include './views/partials/header.php' ?>
    
  <main class="search">
    <!--Creation div to scan DataMatrix-->
    <div id="scandit-barcode-picker"></div>
    <div class="infos-scan-top"></div>
    <!--Form to search the medicine by the name or the CIP code-->
    <form method="post">
      <input class="input-classic" type="text" name="research-name" placeholder="Entrez le nom du médicament">
      <p>ou</p>
      <input class="input-classic input-cip" type="text" name="research-code" placeholder="Entrez le code CIP">
      <div class="infos-scan"></div>
      <input type="submit" class="button" placeholder="rechercher">
    </form>
    <!--Explanation what is CIP code and where you can find it-->
    <div class="infos-cip hide">
      <div class="close"></div>
      <p>Le code CIP identifie chaque médicament dans la base de données nationale.</p>
      <p class="no-margin">C'est un code composé de <span class="text-bold">7 à 13 chiffres.</span></p>
      <p>Le code CIP 13 est <span class="text-bold"> inscrit en clair à côté du DataMatrix</span>, de même que le numéro de lot et la date de péremption.</p>
      <p>Pour le trouver, cherchez sur <span class="text-bold">la boîte de votre médicament</span>, il se trouve à côté du code DataMatrix.</p>
      <div class="container-image">
        <div class="picture"></div>
        <div class="help"></div>
      </div>
    </div>
    <!--Explanation what is DataMatrix and where you can find it-->
    <div class="infos-matrix hide">
      <div class="close2"></div>
      <p>La Datamatrix identifie chaque médicament dans la base de données nationale.</p>
      <p class="no-margin">Il s’agit d’un code de traçabilité qui se présente sous la forme d’<span class="text-bold">un carré constitué de points ou de carrés juxtaposés.</span></p>
      <p>La Datamatrix <span class="text-bold">est inscrite en clair à côté du code CIP</span>, de même que le numéro de lot et la date de péremption.</p>
      <p>Pour le trouver, cherchez sur <span class="text-bold">la boîte de votre médicament</span>, il se trouve à côté du code CIP.</p>
      <div class="container-image">
      <div class="picture"></div>
      <div class="help2"></div>
    </div>
  </main>

  <!--Integration footer-->      
<?php include './views/partials/footer.php' ?>