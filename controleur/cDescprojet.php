<?php
//------------CONTROLEUR
    require 'modele/modele.php';
    $desc = recup_desc();
    $nombreImage = count_image();
    $img = recup_image();
    $video = recup_video();
    require 'vue/vDescprojet.php';
?>