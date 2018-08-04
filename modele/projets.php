<?php
include 'modele/connexionbdd.php';

function recup_all()
{
    $bdd = connexion();
    //Stockage des projets dans un tableau
    
    //Requête SQL qui sélectionne tous les projets classés par année
    /*
    https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-lire-des-donnees
     * Préparer la requête, exécution ensuite.
     *     

     */
    //------------------Préparation de la requête
    $requete_sql = $bdd->prepare("SELECT * FROM projet");
    
    //------------------Exécution de la requête (pas d'injection SQL grâce à ces deux fonctions)
    $requete_sql->execute();
    
//------------------Stocker les résultats de la requête dans un tableau
    $projets = $requete_sql->fetchAll();
    
    return $projets;
}

?>
