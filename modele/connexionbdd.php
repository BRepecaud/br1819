<?php
//*******************************************
//Connexion à la BDD
//*******************************************

try
{
    
    //-------------mysql:host=nomServeur; dbname=nomBDD; charset=utf8', 'nomUser', 'mdp');
    $bdd = new PDO('mysql:host=localhost; dbname=br1819; charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur:'.$e.getMessage());
}

?>