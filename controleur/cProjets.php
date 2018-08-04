<?php
//------------CONTROLEUR
    
    require 'modele/modele.php';
    
    $projets = recup_all();
    
    require 'vue/vProjets.php';
?>