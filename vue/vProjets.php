<div id="projets" class="container-fluid">
    <!--
    ------------------------------LIGNE
    -->
    <div class="row">
        <!--------------------------------HEADER--> 
        <header class="page-header">
            <h2>Projets</h2>
        </header>
        <div id="centerprojets" class="col-lg-offset-1 col-lg-10">
            
            <!--------------------------------LIGNE-->            
            <div id="blocprojets" class="row">
                <!--------------------------------Catégorie projets--> 
                <div id="blocmenuprojets" class="col-lg-12">
                    <ul id="menuprojets" class="nav">
                        <li class="tout categorie-active col-lg-3">
                            <a class="nav-link " href="#/"><span><img src="media/composants/tout.png" width="50em"></span></a>
                        </li>
                        <li class="developpement col-lg-3">
                            <a class="nav-link" href="#/"><span><img src="media/composants/dev.png" width="50em"></span></a>
                        </li>
                        <li class="infographie col-lg-3">
                            <a class="nav-link" href="#/"><span><img src="media/composants/pinceau.png" width="50em"></span></a>
                        </li>
                        <li class="video col-lg-3">
                            <a class="nav-link" href="#/"><span><img src="media/composants/video.png" width="50em"></span></a>
                        </li>
                    </ul>
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
                                
                                <div class="projet col-xs-4 '.$proj['categorie'].'">
                                   <div class="vignette">                                   
                                        <a href="index.php?action=descprojet&nomprojet='.$proj['nomprojet'].'">
                                            <div class="hoverprojet">
                                                <h4>'.$proj['nomprojet'].'</h4>
                                                <h5>'.$proj['alt_vignette'].'</h5>
                                            </div>                                            
                                            <img src="'.$proj['vignette'].'" alt="'.$proj['alt_vignette'].'" width="100%">
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