<!--Integration header-->
<?php include './views/partials/header.php' ?>

<!--Check if variables are empty, if it isn't display every infos on the medicine-->
<? if(!empty($info_cip_bdpm) || !empty($info_cis_bdpm)): ?>

<main>
    <!--Creation card medicine-->
    <div class="containerCardIdentity">
        <h1><?= $name_medoc[0] ?></h1>
        <div class="containerIdentityMedic">
            <div class="identityMedic">
                <div class="codeCIP">
                    <h5 class="text">Code CIP :</h5>
                    <span class="number"><?= ($info_cip_bdpm->code_cip13) ?></span>
                </div>
                <div class="containerLeftRight">
                    <div class="leftIdenty">
                        <div class="commercialDeclaration">
                            <h5 class="text">Déclaration de commercialisation : </h5>
                            <span class="number"><?= $info_cip_bdpm->date_commercialisation ?></span>
                        </div>
                        <div class="prescription">
                            <div class="checkTrueFalse">
                                <h5 class="text">Prescription :</h5>
                                <span class="true number">Avec ou sans</span>
                            </div>

                        </div>
                    </div>
                    <div class="rightIdenty">
                        <div class="refund">
                            <div class="checkTrueFalse">
                                <h5 class="text">Remboursement :</h5>
                                <span
                                    class="false number"><?= ($info_cip_bdpm->taux_remboursement)?$info_cip_bdpm->taux_remboursement : 'n/a' ?></span>
                            </div>

                        </div>
                        <div class="price">
                            <h5 class="text">Tarif moyen :</h5>
                            <span
                                class="number"><?= ($info_cip_bdpm->prix_2)?$info_cip_bdpm->prix_2.' €': 'n/a' ?></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Display symptoms-->
    <div class="containerCardInfoMedic">
        <div class="cardInfoMedic">
            <div class="infoMedic">
                <h2>Symptôme</h2>
                <div class="containerTextInfoMedic">
                    <div class="textInfo">
                        <?= ($utilisations->symptomes)? $utilisations->symptomes : 'Désolé nous ne disposons pas de cette information.' ?>
                    </div>
                </div>
            </div>
        </div>
        <!--Display advice on use-->
        <div class="cardInfoMedic">
            <div class="infoMedic">
                <h2>Conseil d'utilisation</h2>
                <div class="containerTextInfoMedic">
                    <div class="textInfo">
                        <?= ($utilisations->conseil_utilisation)? $utilisations->conseil_utilisation : 'Désolé nous ne disposons pas de cette information.' ?>
                    </div>
                </div>
            </div>
        </div>
        <!--Display side effects-->
        <div class="cardInfoMedic">
            <div class="infoMedic">
                <h2>Effets Indésirables Eventuels</h2>
                <div class="containerTextInfoMedic">
                    <div class="textInfo">
                        <?= ($utilisations->effets_indesirables)? $utliisations->effets_indesirables : 'Désolé nous ne disposons pas de cette information.' ?>
                    </div>
                </div>
            </div>
        </div>
        <!--Display composition-->
        <div class="cardInfoMedic">
            <div class="infoMedic">
                <h2>Composition</h2>
                <div class="containerTextInfoMedic">
                    <div class="textInfo">
                        <?= ($utilisations->composition)? $utilisations->composition : 'Désolé nous ne disposons pas de cette information.' ?>
                    </div>
                </div>
            </div>
        </div>
        <!--Display equivalent medicine-->
        <div class="cardInfoMedic">
            <div class="infoMedic">
                <h2>Equivalent</h2>
                <div class="containerTextInfoMedic">
                    <div class="textInfo">
                        <?= ($utilisations->equivalents)? $utilisations->equivalents : 'Désolé nous ne disposons pas de cette information.' ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<!--If variables are empty, display this text-->
<? else: ?>
<main>
    <div class="image-not-found"></div>
    <h1 class="not-found">Désolé ce médicament n'est pas connu par nos services.</h1>
</main>
<? endif; ?>

<!--Integration footer-->
<?php include './views/partials/footer.php' ?>