<div id="projets" class="container-fluid">
    <!--
    ------------------------------LIGNE
    -->
    <div class="row">
        <!--------------------------------HEADER--> 
        <header class="page-header">
            <h2>Projets</h2>
        </header>
        <div class="col-lg-offset-1 col-lg-10">
            
            <!--------------------------------LIGNE-->            
            <div class="row">
                <!--------------------------------Catégorie projets--> 
                <div class="col-lg-12">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link active" href="#/">TOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#/">Développement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#/">Infographie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#/">Vidéo</a>
                        </li>
                    </ul>
                </div>
                <!--------------------------------Pictogramme projets--> 
                <div class="col-lg-12">
                    <img src="" alt="développement">
                    <img src="" alt="infographie">
                    <img src="" alt="vidéo">
                </div>
                <!--------------------------------LIGNE--> 
                <div class="row"> 
                    <?php
                    /*
                        Pour chaque projet: 'thumbnail' de 4 colonnes
                        * $proj['entiteBDD'] *
                        a href: passage en paramètre des données utiles pour la page descprojet
                        img: vignette 
                    */
                        foreach($projets as $proj)
                        {
                            echo '
                                
                                <div class="col-lg-4">
                                   <div class="thumbnail">
                                        <a href="index.php?action=descprojet&nomprojet='.$proj['nomprojet'].'">
                                            <img src="'.$proj['vignette'].'" alt="" width="100%">
                                        </a>    
                                   </div>
                                </div>

                            ';
                        }
                        //endforeach
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>