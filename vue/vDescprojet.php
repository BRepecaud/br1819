<div id="descprojet" class="container-fluid">
    <div class="row">
            <header id="headerprojet" class="page-header">
                <h1><?= $desc['nomprojet']; ?></h1>
                <h3>
                    <?= $desc['annee']; ?> - <?= $desc['duree']; ?> 
                    
                    <?php if($desc['lien']!=null): ?>
                    <div id="linkprojet"><a href="<?= $desc['lien'] ?>" target="blank"><span class="glyphicon glyphicon-link"></span> Lien </a></div>
                    <?php endif; ?>                    
                </h3>


                    
            </header>
            
            <!-- IMAGE / VIDEO DU PROJET   -->
            <div class="row">
                <div class="col-lg-6">
                    
                        <?php 
                            //echo $nombreImage;
                            $categorie = $desc['categorie'];
                            
                            //if categorie == infographie ou developpement --> img...
                            if(($categorie == 'infographie') || ($categorie == 'developpement')) :
                        ?>
        
                        <!--  CAROUSEL  -->
                            <div id="carouselprojet" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <?php 
                                        //----------Suivant le nombre d'image du projet, nombre de li (data-to-slide) différent
                                        for($i=0; $i<$nombreImage; $i++): 
                                            if($i == 0): 
                                                $class = 'active';
                                            endif;
                                    ?>
                                        <li data-target="#carouselprojet" data-slide-to="<?=$i;?>" class="<?= $class; ?>"></li>
                                    <?php endfor; ?>
                                </ol>
                                
                                <div class="carousel-inner">
                                    <?php foreach($img as $pic): ?>
                                    <?php
                                            //----Si premier élément: class active
                                            if($img[0] == $pic):
                                                $class = 'item active';
                                            //----Sinon: qu'item
                                            else:
                                                $class = 'item';
                                            endif;
                                    ?>                                   
                                    <div class="<?= $class ?>">
                                        <img class="col-lg-12" src="<?= $pic['lien_carousel']; ?>" alt='<?= $pic['alt_carousel'] ?>'>                
                                    </div>                                    
                                    <?php endforeach; ?>
                                </div>
                                
                                <!--CONTROLEURS CAROUSEL-->
                                    <a class="left carousel-control" href="#carouselprojet" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>

                                    <a class="right carousel-control" href="#carouselprojet" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                            </div>  
                        <?php 
                            //... sinon --> iframe
                            elseif ($categorie == 'video'):
                        ?>
                            <div class="embed-responsive embed-responsive-4by3">        
                                <iframe  src="<?= $video['lien_carousel']; ?>" allowfullscreen="allowfullscreen"></iframe>    
                            </div>   
                    
                        <?php endif; ?>
                        
                        
                    
                </div>
            
            
            <!-- DESCRIPTIF DU PROJET -->
            <div id="blocdescprojet" class="col-lg-6">
                <dl>
                    <div class="row">
                        <!--OBJECTIF-->
                        <div class="col-sm-5">
                            <dt><span><img src="media/composants/check.png" width="50px" height="50px"></span> Objectif</dt>
                            <dd class="col-xs-12"><?= $desc['objectif']; ?></dd>
                        </div>

                        <!--OUTILS-->
                        <div class="col-sm-offset-2 col-sm-5">
                            <dt><span><img src="media/composants/outils.png" width="50px" height="50px"></span> Outils</dt>
                            <dd class="col-xs-12"><?= $desc['outil']; ?></dd>
                        </div>
                    </div>
                    
                    <div class="row">
                        <!--INTERPRETATION-->
                        <div class="col-sm-5">
                            <dt><span><img src="media/composants/interpretation.png" width="50px" height="50px"></span> Interprétation</dt>
                            <dd class="col-xs-12"><?= $desc['interpretation']; ?></dd>
                        </div>

                        <!--COMPETENCES-->
                        <div class="col-sm-offset-2 col-sm-5">
                            <dt><span><img src="media/composants/competences.png" width="50px" height="50px"></span> Compétences</dt>
                            <dd class="col-xs-12"><?= $desc['competences']; ?></dd>
                        </div>
                    </div>
                </dl>
            </div>

        </div>   

    </div>
</div>

