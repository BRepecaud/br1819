<?php

/*
    CONNNEXION BDD
*/
function connexion()
{
    try
    {
        //-------------mysql:host=nomServeur; dbname=nomBDD; charset=utf8', 'nomUser', 'mdp');
        
        return $bdd;
    }
    catch(Exception $e)
    {
        die('Erreur:'.$e.getMessage());
    }

}

/*
    RECUP DE TOUS LES PROJETS
*/
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

/*
    RECUP DE LA DESCRIPTION DES PROJETS
*/
function recup_desc()
{
    $bdd = connexion();
    
    //WHERE nomprojet = ? --> ? correspond au nom de projet passé en paramètre dans le lien vers le projet en question.
    $requete_sql = $bdd->prepare("SELECT * FROM projet WHERE nomprojet = ?");
    $requete_sql->execute(array($_GET['nomprojet']));
    
    $desc = $requete_sql->fetch();
    return $desc;
}

/*
    COMPTE LE NOMBRE D'IMAGE DES PROJETS
 * (utile pour le carousel)
*/
function count_image()
{
    $bdd = connexion();
    
    $requete_sql = $bdd->prepare('SELECT COUNT(lien_image) FROM carousel WHERE nomprojet_carousel = ?');
    $requete_sql->execute(array($_GET['nomprojet']));
    
    $nombreImage = $requete_sql->fetch();
    
    //-----------------$nombreImage[0]: contenu du resultat = nombre d'image
    return ($nombreImage[0]);
}

/*
    RECUP DES IMAGES DES PROJETS
 * selection des éléments de la table carousel comparés avec le nom du projet sélectionné
*/
function recup_image()
{
    $bdd = connexion();
  
    $requete_sql = $bdd->prepare('SELECT * FROM carousel WHERE nomprojet_carousel = ?');
    $requete_sql->execute(array($_GET['nomprojet']));

    $img = $requete_sql->fetchAll();
    return $img;
}

/*
    RECUP DES IMAGES DES PROJETS
 * selection des éléments de la table carousel comparés avec le nom du projet sélectionné
*/
function recup_video()
{
    $bdd = connexion();
  
    $requete_sql = $bdd->prepare('SELECT * FROM carousel WHERE nomprojet_carousel = ?');
    $requete_sql->execute(array($_GET['nomprojet']));

    $video = $requete_sql->fetch();
    return $video;
}

?>

