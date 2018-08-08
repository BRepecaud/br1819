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
                    <ul id="menuprojet" class="nav">
                        <li class="tout categorie-active col-lg-3">
                            <a class="nav-link " href="#/"><i class="glyphicon glyphicon-th"></i></a>
                        </li>
                        <li class="developpement col-lg-3">
                            <a class="nav-link" href="#/"><i class="glyphicon glyphicon-globe"></i></a>
                        </li>
                        <li class="infographie col-lg-3">
                            <a class="nav-link" href="#/"><i class="glyphicon glyphicon-leaf"></i></a>
                        </li>
                        <li class="video col-lg-3">
                            <a class="nav-link" href="#/"><i class="glyphicon glyphicon-facetime-video"></i></a>
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
                                
                                <div class="projet col-lg-4 '.$proj['categorie'].'">
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