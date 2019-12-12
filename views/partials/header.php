<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="<?= URL ?>/assets/images/favicon.png"/>
        <title><?= !empty($title) ? $title : 'Title is empty' ?></title>
        <link rel="stylesheet" href="<?= URL ?>assets/styles/style.css">
    </head>
    <body>
        <header class="header">
            <img src="<?= URL ?>assets/images/scan_logo.svg" alt="" class="logo-scan logo-header">
            <a href="<? URL ?>home"><img src="<?= URL ?>assets/images/logo.svg" alt="" class="logo logo-header"></a>
            <img src="<?= URL ?>assets/images/button_menu.svg" alt="" class="button-menu logo-header">
            <nav class="navigation is-appear">
                <ul class="navigation-list">
                    <li class="navigation-content"><a href="<? URL ?>home">home</a></li>
                    <li class="navigation-content"><a href="<? URL ?>team">équipe</a></li>
                    <li class="navigation-content"><a href="<? URL ?>contact">contact</a></li>
                    <li class="navigation-content"><a href="<? URL ?>mentions">mentions</a></li>
                </ul>
                <div class="scroll-menu-container">
                    <img src="<?= URL ?>assets/images/scroll_menu.png" alt="" class="scroll-menu">
                </div>
            </nav>
        </header>