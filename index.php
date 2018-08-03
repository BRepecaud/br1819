<!DOCTYPE HTML>
<html>
    <?php 
        include('vue/head.php'); 
    ?>
    
    <body>
        <?php

    //---------------------------------------MENU
            include('vue/menu.php');
            
    //---------------------------------------INCLUSION CONTROLEUR

            if(!empty($_GET['page']) && is_file('controleur/'.$_GET['page'].'.php'))
            {
                include('controleur/descprojet.php');
            }
            else{
                include('controleur/main.php');
                include('controleur/projets.php');
            }
        ?>
    </body>
</html>