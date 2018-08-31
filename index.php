<?php session_start();?>
<!DOCTYPE HTML>
<html>
    <?php 
        require 'vue/head.php'; 
    ?>
    
    <body>
        <div id="background"></div>
        <?php

            try
            {
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
                    require 'controleur/cMain.php';                
                }
            }
            catch(Exception $e)
            {
                $e->getMessage();
            }
        ?>
               
       <script src="js/main.js"></script>
        
    </body>
</html>
