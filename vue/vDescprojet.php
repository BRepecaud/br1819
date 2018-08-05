<div id="descprojet" class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <header class="page-header">
                <h1><?= $desc['nomprojet']; ?></h1>
                <h3>
                    <?= $desc['annee']; ?> - <?= $desc['duree']; ?> 
                </h3>
            </header>
            
            <!-- IMAGE DU PROJET -->
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="thumbnail">
                        <img class="col-lg-12" src="<?= $desc['lien']; ?>">
                    </div>
                </div>
            </div>
            
            <!-- DESCRIPTIF DU PROJET -->
            <div class="row">
                <dl>
                    <!--OBJECTIF-->
                    <div class="col-lg-5">
                        <dt><i class="glyphicon glyphicon-ok"><!--<img src="media/hamburger.png">--></i> Objectif</dt>
                        <dd><?= $desc['objectif']; ?></dd>
                    </div>
                    
                    <!--OUTILS-->
                    <div class="col-lg-offset-2 col-lg-5">
                        <dt><i class="glyphicon glyphicon-cog"></i> Outils</dt>
                        <dd><?= $desc['outil']; ?></dd>
                    </div>
                    
                    <!--INTERPRETATION-->
                    <div class="col-lg-5">
                        <dt><i class="glyphicon glyphicon-pencil"></i> Interprétation</dt>
                        <dd><?= $desc['interpretation']; ?></dd>
                    </div>
                    
                    <!--COMPETENCES-->
                    <div class="col-lg-offset-2 col-lg-5">
                        <dt><i class="glyphicon glyphicon-bookmark"></i> Compétences</dt>
                        <dd><?= $desc['competences']; ?></dd>
                    </div>
                </dl>
            </div>
        </div>
        
        <!--CAROUSEL-->
        <div class="col-lg-4">
            <div id="carouselprojet" class="carousel slide" data-ride="carousel">
                <ol>
                    <li data-target="#carouselprojet" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselprojet" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselprojet" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="col-lg-12" src="<?= $desc['lien']?>">                
                    </div>
                    <div class="item">
                        <img class="col-lg-12" src="media/remanence1.png">                
                    </div>
                    <div class="item">
                        <img class="col-lg-12" src="media/remanence2.png">                
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>

