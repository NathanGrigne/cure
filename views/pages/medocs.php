<?php include './views/partials/header.php' ?>

<? if(!empty($info_cip_bdpm) || !empty($info_cis_bdpm)): ?>

<main>
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
    <div class="containerCardInfoMedic">
        <div class="cardInfoMedic">
            <div class="infoMedic">
                <h2>Symptôme</h2>
                <div class="containerTextInfoMedic active">
                    <div class="textInfo">
                        ABACAVIR/LAMIVUDINE BIOGARAN contient deux substances actives qui sont utilisées pour
                        traiter
                        l'infection par le VIH : l’abacavir et la lamivudine. Ces deux substances actives
                        appartiennent
                        à une classe de médicaments antirétroviraux appelés analogues nucléosidiques inhibiteurs de
                        la
                        transcriptase inverse (INTI).

                        ABACAVIR/LAMIVUDINE BIOGARAN ne guérit pas complètement l'infection par le VIH ; il diminue
                        la
                        quantité de virus dans votre corps, et la maintient à un niveau bas. Il augmente également
                        le
                        nombre de cellules CD4 dans votre sang. Les cellules CD4 sont un type de globule blanc
                        important
                        pour aider votre corps à combattre les infections.
                    </div>
                </div>
            </div>
        </div>
        <div class="cardInfoMedic">
            <div class="infoMedic">
                <h2>Conseil d'utilisation</h2>
                <div class="containerTextInfoMedic">
                    <div class="textInfo">
                        ABACAVIR/LAMIVUDINE BIOGARAN contient deux substances actives qui sont utilisées pour
                        traiter
                        l'infection par le VIH : l’abacavir et la lamivudine. Ces deux substances actives
                        appartiennent
                        à une classe de médicaments antirétroviraux appelés analogues nucléosidiques inhibiteurs de
                        la
                        transcriptase inverse (INTI).

                        ABACAVIR/LAMIVUDINE BIOGARAN ne guérit pas complètement l'infection par le VIH ; il diminue
                        la
                        quantité de virus dans votre corps, et la maintient à un niveau bas. Il augmente également
                        le
                        nombre de cellules CD4 dans votre sang. Les cellules CD4 sont un type de globule blanc
                        important
                        pour aider votre corps à combattre les infections.
                    </div>
                </div>
            </div>
        </div>
        <div class="cardInfoMedic">
            <div class="infoMedic">
                <h2>Effets Indésirables Eventuels</h2>
                <div class="containerTextInfoMedic">
                    <div class="textInfo">
                        ABACAVIR/LAMIVUDINE BIOGARAN contient deux substances actives qui sont utilisées pour
                        traiter
                        l'infection par le VIH : l’abacavir et la lamivudine. Ces deux substances actives
                        appartiennent
                        à une classe de médicaments antirétroviraux appelés analogues nucléosidiques inhibiteurs de
                        la
                        transcriptase inverse (INTI).

                        ABACAVIR/LAMIVUDINE BIOGARAN ne guérit pas complètement l'infection par le VIH ; il diminue
                        la
                        quantité de virus dans votre corps, et la maintient à un niveau bas. Il augmente également
                        le
                        nombre de cellules CD4 dans votre sang. Les cellules CD4 sont un type de globule blanc
                        important
                        pour aider votre corps à combattre les infections.
                    </div>
                </div>
            </div>
        </div>
        <div class="cardInfoMedic">
            <div class="infoMedic">
                <h2>Composition</h2>
                <div class="containerTextInfoMedic">
                    <div class="textInfo">
                        ABACAVIR/LAMIVUDINE BIOGARAN contient deux substances actives qui sont utilisées pour
                        traiter
                        l'infection par le VIH : l’abacavir et la lamivudine. Ces deux substances actives
                        appartiennent
                        à une classe de médicaments antirétroviraux appelés analogues nucléosidiques inhibiteurs de
                        la
                        transcriptase inverse (INTI).

                        ABACAVIR/LAMIVUDINE BIOGARAN ne guérit pas complètement l'infection par le VIH ; il diminue
                        la
                        quantité de virus dans votre corps, et la maintient à un niveau bas. Il augmente également
                        le
                        nombre de cellules CD4 dans votre sang. Les cellules CD4 sont un type de globule blanc
                        important
                        pour aider votre corps à combattre les infections.
                    </div>
                </div>
            </div>
        </div>
        <div class="cardInfoMedic">
            <div class="infoMedic">
                <h2>Equivalent</h2>
                <div class="containerTextInfoMedic">
                    <div class="textInfo">
                        ABACAVIR/LAMIVUDINE BIOGARAN contient deux substances actives qui sont utilisées pour
                        traiter
                        l'infection par le VIH : l’abacavir et la lamivudine. Ces deux substances actives
                        appartiennent
                        à une classe de médicaments antirétroviraux appelés analogues nucléosidiques inhibiteurs de
                        la
                        transcriptase inverse (INTI).

                        ABACAVIR/LAMIVUDINE BIOGARAN ne guérit pas complètement l'infection par le VIH ; il diminue
                        la
                        quantité de virus dans votre corps, et la maintient à un niveau bas. Il augmente également
                        le
                        nombre de cellules CD4 dans votre sang. Les cellules CD4 sont un type de globule blanc
                        important
                        pour aider votre corps à combattre les infections.
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<? else: ?>
<main>
    <div class="image-not-found"></div>
    <h1 class="not-found">Désolé ce médicament n'est pas connu par nos services.</h1>
</main>
<? endif; ?>

<?php include './views/partials/footer.php' ?>