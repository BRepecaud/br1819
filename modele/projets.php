<?php

function recup_all()
{
    //Stockage des projets dans un tableau
    $projets = array();
    
    //Requête SQL qui sélectionne tous les projets classés par année
    $requete_sql = mysql_query("SELECT ALL FROM projet ORDER BY annee");
    
    while($data = mysql_fetch_assoc($requete_sql))
    {
        $projets[] = $data;
    }
    
    return $projets;
}

?>
