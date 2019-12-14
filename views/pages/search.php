<?php include './views/partials/header.php' ?>

<main class="search">

  <div class="containerInfoScan">
    <div class="infoScan "></div>
  </div>

  <canvas id="scan-zone"></canvas>
  <form>
    <input class="input-classic" type="text" name="research-name" placeholder="Entrez le nom du médicaments">
    <p>ou</p>
    <div class="inputCip">
      <input class="input-classic" type="text" name="research-code" placeholder="Entrez le code CIP">
      <div class="infoScan cip">
      </div>

    </div>
  </form>
  <h4><?= $cip_code->code_cip13 ?></h4>
  <div class="containerOverInfoScan ">
    <div class="containerInfoScan">
      <div class="infoScan close"></div>
    </div>
    <div class="overinfoScan">
      <div class="containerTextInfoScan">
        <p>
          La Datamatrix identifie chaque médicament remboursable dans la base de données nationale.
        </p>
        <p class="infoScan">
          Il s’agit d’un code de traçabilité qui se présente sous la forme d’un <span class="bold">carré constituée de points ou de carrés
          juxtaposés</span>.
        </p>
        <p class="infoScan">
          La Datamatrix est <span class="bold">inscrit en clair à coté du code CIP</span>, de même que le numéro de lot et la date de péremption.
        </p>
        <p class="infoScan">
          Pour le trouver, cherchez sur <span class="bold">la boite de votre médicament</span>, il se trouve a coté du code CIP.
        </p>
      </div>
      <div class="imageOverInfoScan">
        <div class="leftImage"></div>
        <div class="rightImage"></div>
      </div>
    </div>
  </div>
  <div class="containerOverInfoScan ">
    <div class="containerInfoScan">
      <div class="infoScan close"></div>
    </div>
    <div class="overinfoScan">
      <div class="containerTextInfoScan">
        <p>
        Le code CIP identifie chaque médicament remboursable dans la base de données nationale. 
C’est un code composé de <span class="bold">7 à 13 chiffres</span>. 
        </p>
        <p class="infoScan">
        Le code CIP 13 <span class="bold">est inscrit en clair à coté du DataMatrix</span>, de même que le numéro de lot et la date de péremption. 
        </p>
        <p class="infoScan">
        Pour le trouver, cherchez sur <span class="bold">la boite de votre médicament</span>, il se trouve a coté du code Datamatrix.
        </p>

      </div>
      <div class="imageOverInfoScan">
        <div class="leftImage"></div>
        <div class="rightImage cip"></div>
      </div>
    </div>
  </div>
</main>


<?php include './views/partials/footer.php' ?>