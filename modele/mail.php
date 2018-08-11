<?php
    
    require 'modele.php';

    $bdd = connexion();
    
    //----------------données récupérées de main.js (ajax)
    $nom = $_POST['nom'];        
    $prenom = $_POST['prenom'];        
    $email = $_POST['email'];       
    $objet = $_POST['objet'];      
    $message = $_POST['message'];     
    $monmail = "benjamin.repecaud@orange.fr";
    
    //----------------booléens pour l'envoi réussi ou non
    $succesBool = true;
    $erreurBool = false;    
    
//----------------STOCKAGE DANS BDD + ENVOI MAIL
    //-----si les champs ne sont pas vides
    if($nom != "" && $prenom != "" && $email != "" && $objet != "" && $message != "")
    {
        //mail($monmail, $objet, $message, "From:".$email);
        //$succes = mail($monmail, $objet, $message, "From:".$prenom." ".$nom." (".$email.")");
        $requete_sql = $bdd->prepare("INSERT INTO boitereception (nom, prenom, email, objet, message) VALUES (:nom, :prenom, :email, :objet, :message)");
        $requete_sql->execute(array( 
           'nom' => $nom, 
           'prenom' => $prenom, 
           'email' => $email, 
           'objet' => $objet, 
           'message' => $message, 
        ));

          $envoi = true;  
    }
    //-----sinon
    else
    {
        $envoi = false;
    }
    
    //-----transmission du booléen à main.js (ajax) pour affichage message Valide ou Erreur
    if($envoi)
    {
        echo $succesBool;
    }
    else
    {
        echo $erreurBool;
    }

    

?>

