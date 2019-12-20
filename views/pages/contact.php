<!--Integration header-->
<?php include './views/partials/header.php' ?>

    <main class="contact">
        <!--Formulaire to contact the team-->
        <div class="contact-form-js">
            <h1 class="contact-title-top">Nous</h1>
            <h1 class="contact-title-bottom">contacter</h1>
            <form id="contact-us">
                <input class="input-classic" type="text" name="lastname" placeholder="Nom">
                <input class="input-classic" type="text" name="email" placeholder="Email">
                <input class="input-classic" type="text" name="object" placeholder="Objet">
                <input class="input-message" type="text" name="message" placeholder="Message">
            </form>
            <button class="send-form" type="submit" value="Submit">Envoyer</button>
        </div>
        <!--Animation when mail is send-->
        <div class="contact-check-js">
            <img src="<?= URL ?>assets/images/check-emoticon.png" alt="Green check"/>
        </div>
        <div class="contact-thanksmessage-js">
            <h1>Merci !</h1>
            <h1>Notre équipe vous répondra dans les plus bref délais.</h1>
            <img src="<?= URL ?>assets/images/write-emoticon.png" alt="Blue Write"/>
        </div>
    </main>

<!--Integration footer-->
<?php include './views/partials/footer.php' ?>