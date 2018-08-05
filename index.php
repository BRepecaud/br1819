<!DOCTYPE HTML>
<html>
    <?php 
        require 'vue/head.php'; 
    ?>
    
    <body>
        <?php

    //---------------------------------------MENU
        require 'vue/vMenu.php';
            
    //---------------------------------------INCLUSION CONTROLEUR
        /*
            Soit descprojet, soit accueil
         * vMenu: lien vers descprojet --> paramètre: action et nomprojet
         * vérification de l'existance de ces paramètres
         * si présent: require cDescprojet
         * sinon: accueil
        */

            if(isset($_GET['action']))
            {
                if(isset($_GET['action']) == 'descprojet')
                {
                    if(isset($_GET['nomprojet']))
                    {
                        require('controleur/cDescprojet.php');
                    }
                    
                }
                
            }
            else
            { 
                /*

                 * 
                 * 
                 * 
                 * CONTROLEUR GLOBAL
                 * 
                 * 
                 * 
                 *                  */
                require 'controleur/cMain.php';
                require 'controleur/cPresentation.php';
                require 'controleur/cProjets.php';
                require 'controleur/cContact.php';
            }
        ?>
    </body>
</html>
