<div id="contact" class="container-fluid">
    <div class="row">
        <!--------------------------------HEADER--> 
        <header class="page-header">
            <h2>Contact</h2>
        </header>        
        <div class="col-md-4">
            <div class="info-contact row col-xs-6">
                <div class="icontact col-xs-12"><span class="fas fa-envelope"></span></div>
                <div class="textcontact col-xs-12">benjamin.repecaud@orange.fr</div>
            </div>
            
            <div class="info-contact row col-xs-6">
                <div class="icontact col-xs-12 "><span class="fas fa-mobile-alt"></span></div>
                <div class="textcontact col-xs-12">06 75 58 29 94</div>                
            </div>
            
            <div class="info-contact row col-xs-6">
                <div class="icontact col-xs-12"><span class="fab fa-linkedin"></span></div>
                <div class="textcontact col-xs-12">Benjamin Répécaud</div>                
            </div>
            
            <div class="info-contact row col-xs-6">
                <div class="icontact col-xs-12"><span class="fab fa-github"></span></div>
                <div class="textcontact col-xs-offset-4-12">BRepecaud</div>                
            </div>
        </div>
        <div id="separateur" class="col-xs-offset-1 col-xs-1">
            <div class="row"><div class="rond"></div></div>
            <div class="row"><div id="rectangle"></div></div>
            <div class="row"><div class="rond"></div></div>
        </div>
        <div id="formulaire" class="col-md-offset-1 col-md-5">
            <form id="form-contact" method="post" action="modele/mail.php">
                <div class="row">
                    <!----------------------------------------------------NOM/PRENOM-->                 
                    <div class="input-contact form-group col-md-5">
                        <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom">
                    </div>
                    <div class="col-md-2">
                        <div class="rond"></div>
                    </div>
                    <div class="input-contact form-group col-md-5">
                        <input type="text" class="form-control" placeholder="Prénom" name="prenom" id="prenom">
                    </div>

                    <!----------------------------------------------------EMAIL-->                 
                    <div class="input-contact form-group col-md-12">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                    </div>
                    <!----------------------------------------------------OBJET-->                 
                    <div class="input-contact form-group col-md-5">
                        <input type="text" class="form-control" placeholder="Objet" name="objet" id="objet">
                    </div>
                    <!----------------------------------------------------MESSAGE-->                 
                    <div class="input-contact form-group col-md-12">
                        <textarea class="form-control" rows="3" cols="45" placeholder="Message" name="message" id="message"></textarea>
                    </div>
                </div>
                <div id="envoi" class="row">
                    <button id="btn-envoi" type="submit" class="btn pull-right col-md-5">Envoyer</button>

                    <h4 id="form-valide" class="hidden">Message envoyé !</h4>
                    <h4 id="form-erreur" class="hidden">Un ou plusieurs champs manquants.</h4>
                </div>
            </form>
        </div>
    </div>
</div>

