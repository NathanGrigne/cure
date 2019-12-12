<?php include './views/partials/header.php' ?>

    <main class="contact">
        <h1 class="contact-title-top">Nous</h1>
        <h1 class="contact-title-bottom">contacter</h1>
        <form method="post" action="#">
            <input class="input-classic" type="text" name="name" placeholder="Nom">
            <input class="input-classic" type="email" name="email" placeholder="Email">
            <input class="input-classic" type="text" name="subject" placeholder="Objet">
            <input class="input-message" type="text" name="text" placeholder="Message">
            <input class="send" type="submit" value="Envoyer">
        </form>
    </main>
    
<?php include './views/partials/footer.php' ?>