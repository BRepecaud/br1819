<div id="descprojet" class="container-fluid">
    <div class="row">
            <header class="page-header">
                <h1><?= $desc['nomprojet']; ?></h1>
                <h3>
                    <?= $desc['annee']; ?> - <?= $desc['duree']; ?> 
                </h3>

                <?php if($desc['lien']!=null): ?>
                    
                    <h3><i class="glyphicon glyphicon-link"></i><a href="<?= $desc['lien'] ?>" target="blank"> Lien </a></h3>
                <?php endif; ?>
                    
            </header>
            
            <!-- IMAGE / VIDEO DU PROJET   -->
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                    
                        <?php 
                            //echo $nombreImage;
                            $categorie = $desc['categorie'];
                            
                            //if categorie == infographie ou developpement --> img...
                            if(($categorie == 'infographie') || ($categorie == 'developpement')) :
                        ?>
        
                        <!--  CAROUSEL  -->
                            <div id="carouselprojet" class="carousel slide" data-ride="carousel">
                                <ol>
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
            </div>
            
            <!-- DESCRIPTIF DU PROJET -->
            <div class="row">
                <dl>
                    <!--OBJECTIF-->
                    <div class="col-lg-5">
                        <dt><i><img src="media/composants/check.png" width="50px" height="50px"></i> Objectif</dt>
                        <dd><?= $desc['objectif']; ?></dd>
                    </div>
                    
                    <!--OUTILS-->
                    <div class="col-lg-offset-2 col-lg-5">
                        <dt><i><img src="media/composants/outils.png" width="50px" height="50px"></i> Outils</dt>
                        <dd><?= $desc['outil']; ?></dd>
                    </div>
                    
                    <!--INTERPRETATION-->
                    <div class="col-lg-5">
                        <dt><i><img src="media/composants/interpretation.png" width="50px" height="50px"></i> Interprétation</dt>
                        <dd><?= $desc['interpretation']; ?></dd>
                    </div>
                    
                    <!--COMPETENCES-->
                    <div class="col-lg-offset-2 col-lg-5">
                        <dt><i><img src="media/composants/competences.png" width="50px" height="50px"></i> Compétences</dt>
                        <dd><?= $desc['competences']; ?></dd>
                    </div>
                </dl>
            </div>

            

    </div>
</div>

