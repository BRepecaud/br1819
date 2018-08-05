<?php

/*
    CONNNEXION BDD
*/
function connexion()
{
    try
    {
        //-------------mysql:host=nomServeur; dbname=nomBDD; charset=utf8', 'nomUser', 'mdp');
        $bdd = new PDO('mysql:host=localhost; dbname=br1819_essai; charset=utf8', 'root', '');
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
    
    $requete_sql = $bdd->prepare("SELECT * FROM projet WHERE nomprojet = ?");
    $requete_sql->execute(array($_GET['nomprojet']));
    
    $desc = $requete_sql->fetch();
    
    return $desc;
}

?>

