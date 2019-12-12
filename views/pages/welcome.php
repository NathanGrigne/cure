<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="<?= URL ?>/assets/images/favicon.png"/>
        <title><?= !empty($title) ? $title : 'Title is empty' ?></title>
        <link rel="stylesheet" href="<?= URL ?>assets/styles/welcome.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">
    </head>
    <body>
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
        <script src="<?= URL ?>assets/scipts/welcome.js"></script>
    </body>
    </html>