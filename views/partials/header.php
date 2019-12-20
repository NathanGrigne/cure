<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="<?= URL ?>/assets/images/logo.ico"/>
        <title><?= !empty($title) ? $title : 'Title is empty' ?></title>
        <? if($q != 'welcome'): ?>
        <link rel="stylesheet" href="<?= URL ?>assets/styles/style.css">
        <? endif; ?>
        <link rel="stylesheet" href="<?= URL ?>assets/styles/<?= $controller ?>.css">
    </head>
    <body>
        <!--Load this part if the page is different as Welcome-->
        <? if($q != 'welcome'): ?>
        <header class="header">
            <a href="<?= URL ?>search"><img src="<?= URL ?>assets/images/search.svg" alt="" class="logo-scan logo-header"></a>
            <a href="<?= URL ?>home"><img src="<?= URL ?>assets/images/logo.svg" alt="" class="logo logo-header"></a>
            <img src="<?= URL ?>assets/images/button_menu.svg" alt="" class="button-menu logo-header">
            <nav class="navigation disappear">
                <ul class="navigation-list">
                    <li class="navigation-content"><a href="<?= URL ?>home">home</a></li>
                    <li class="navigation-content"><a href="<?= URL ?>search">rechercher</a></li>
                    <li class="navigation-content"><a href="<?= URL ?>team">équipe</a></li>
                    <li class="navigation-content"><a href="<?= URL ?>contact">contact</a></li>
                    <li class="navigation-content"><a href="<?= URL ?>mentions">mentions</a></li>
                </ul>
                <div class="scroll-menu-container">
                    <img src="<?= URL ?>assets/images/scroll_menu.png" alt="" class="scroll-menu">
                </div>
            </nav>
        </header>
        <? endif; ?>