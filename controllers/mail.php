if(!empty($_POST)){
    $mail = 'lissandre.pasdeloup@gmail.com'; // Déclaration de l'adresse de destination.
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
    {
        $passage_ligne = "\r\n";
    }
    else
    {
        $passage_ligne = "\n";
    }

    /**
     * Déclaration des messages au format texte et au format HTML.
     */

    $message_txt = $_POST['text'];


    $message_html = "<html><head></head><body>".$_POST['text']."</body></html>";
    
    /**
     * Création de la boundary
     */
    $boundary = "-----=".md5(rand());
    
    /**
     * Définition du sujet.
     */
    $sujet = "Contact folio";

    /**
     * Création du header de l'e-mail.
     */
    $header = "From: ".$_POST['email'].$passage_ligne;
    $header.= "Reply-to: <".$_POST['email'].">".$passage_ligne;
    $header.= "MIME-Version: 1.0".$passage_ligne;
    $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    
    /**
     * Création du message.
     */
    $message = $passage_ligne."--".$boundary.$passage_ligne;

    /**
     * Ajout du message au format texte.
     */
    $message.= "Content-Type: text/plain; charset=\"us-ascii\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_txt.$passage_ligne;
    //==========
    $message.= $passage_ligne."--".$boundary.$passage_ligne;

    /**
     * Ajout du message au format HTML
     */
    $message.= "Content-Type: text/html; charset=\"us-ascii\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_html.$passage_ligne;
    //==========
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    
    /**
     * Envoi de l'e-mail.
     */
    mail($mail,$sujet,$message,$header);
}