<?php include './views/partials/header.php' ?>
    
  <main class="search">
  <div id="scandit-barcode-picker"></div>
    <div class="infos-scan-top"></div>
      <form method="post">
        <input class="input-classic" type="text" name="research-name" placeholder="Entrez le nom du médicaments">
        <p>ou</p>
        <input class="input-classic input-cip" type="text" name="research-code" placeholder="Entrez le code CIP">
        <div class="infos-scan"></div>
        <input type="submit" class="button">
      </form>
      <div class="infos-cip hide">
        <div class="close"></div>
        <p>Le code CIP identifie chaque médicament remboursable dans la base de données nationale.</p>
        <p class="no-margin">C'est un code composée de <span class="text-bold">7 à 13 chiffres.</span></p>
        <p>Le code CIP 13 est <span class="text-bold">est inscrit en clair à côté du DataMatrix</span>, de même que le numéro de lot et la date de péremption.</p>
        <p>Pour le trouver, cherchez sur <span class="text-bold">la boîte de votre médicament</span>, il se trouve à côté du code DataMatrix.</p>
        <div class="container-image">
          <div class="picture"></div>
          <div class="help"></div>
        </div>
      </div>
      <div class="infos-matrix hide">
        <div class="close2"></div>
        <p>La Datamatrix identifie chaque médicament remboursable dans la base de données nationale.</p>
        <p class="no-margin">Il s’agit d’un code de traçabilité qui se présente sous la forme d’<span class="text-bold">un carré constituée de points ou de carrés juxtaposés.</span></p>
        <p>La Datamatrix <span class="text-bold">est inscrit en clair à coté du code CIP</span>, de même que le numéro de lot et la date de péremption.</p>
        <p>Pour le trouver, cherchez sur <span class="text-bold">la boîte de votre médicament</span>, il se trouve à côté du code CIP.</p>
        <div class="container-image">
        <div class="picture"></div>
        <div class="help"></div>
      </div>
    </div>
  </main>

        
<?php include './views/partials/footer.php' ?>