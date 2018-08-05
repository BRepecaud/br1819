<?php
    //------------Main   
    require 'vue/vMain.php';

    //------------Présentation   
    require 'vue/vPresentation.php';

    //------------Projets   
    require 'modele/modele.php';
    $projets = recup_all();
    require 'vue/vProjets.php';

    //------------Contact
    require 'vue/vContact.php';

?>