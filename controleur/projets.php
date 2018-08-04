<?php
//------------CONTROLEUR
    
    include('modele/projets.php');
    
    $projets = recup_all();
    
    include('vue/projets.php');
?>