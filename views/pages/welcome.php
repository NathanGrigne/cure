<?php include './views/partials/header.php' ?>
        <main class="main">
            <div class="first-page">
                <div class="logo-container">
                    <img src="<?= URL ?>assets/images/logo_welcome.png" alt="" class="logo-welcome">
                </div>
                <div class="text-container">
                    <h1 class="title-welcome">Bienvenue !</h1>
                    <p class="text-welcome">Cure est une appli  100% indépendante qui vous facilite l’accès à l’information pharmaceutiques</p>
                </div>
                <div class="down-arrow"></div>
            </div>
            <div class="second-page">
                <div class="logo-container">
                    <img src="<?= URL ?>assets/images/medocs_homepage.png" alt="" class="logo-welcome">
                </div>
                <div class="text-container">
                    <h1 class="title-welcome-2">Découvre en plus sur tes médicaments</h1>
                    <p class="text-welcome">Cure propose une fiche simple pour comprendre facilement votre prise de soins</p>
                </div>
                <button class="let-go"><a class="link-let-go" href="<?= URL ?>home">C'est parti !</a></button>
            </div>
        </main>
<?php include './views.partials.footer?php' ?>