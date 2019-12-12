<?php include '../views/partials/header.php' ?>
    <link rel="stylesheet" href="<? URL ?>assets/styles/contact.css">

    <main class="contact">
        <h1 class="contact-title-top">Nous</h1>
        <h1 class="contact-title-bottom">contacter</h1>
        <form>
            <input class="input-classic" type="text" name="lastname" placeholder="Nom">
            <input class="input-classic" type="text" name="email" placeholder="Email">
            <input class="input-classic" type="text" name="object" placeholder="Objet">
            <input class="input-message" type="text" name="message" placeholder="Message">
            <input class="send" type="submit" value="Envoyer">
        </form>
    </main>
    
<?php include '../views/partials/footer.php' ?>