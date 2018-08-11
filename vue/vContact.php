<div id="contact" class="container-fluid">
    <div class="row">
        <!--------------------------------HEADER--> 
        <header class="page-header">
            <h2>Contact</h2>
        </header>        
        <div class="col-lg-5">
            <div class="col-lg-4">Picto</div>
            <div class="col-lg-8">mail</div>
            <div class="col-lg-4">Picto</div>
            <div class="col-lg-8">telephone</div>
            <div class="col-lg-4">Picto</div>
            <div class="col-lg-8">linkedin</div>
            <div class="col-lg-4">Picto</div>
            <div class="col-lg-8">GitHub</div>
        </div>
        <div class="col-lg-2">
            Barre
        </div>
        <div class="col-lg-5">
            <form id="form-contact" method="post" action="modele/mail.php">
                <!----------------------------------------------------NOM/PRENOM-->                 
                <div class="form-group col-lg-5">
                    <input type="text" class="form-control col-lg-5" placeholder="Nom" name="nom" id="nom">
                </div>
                
                <div class="form-group col-lg-5">
                    <input type="text" class="form-control col-lg-5" placeholder="Prénom" name="prenom" id="prenom">
                </div>
                
                <!----------------------------------------------------EMAIL-->                 
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                </div>
                <!----------------------------------------------------OBJET-->                 
                <div class="form-group col-lg-5">
                    <input type="text" class="form-control" placeholder="Objet" name="objet" id="objet">
                </div>
                <!----------------------------------------------------MESSAGE-->                 
                <div class="form-group">
                    <textarea class="form-control" rows="3" cols="45" placeholder="Message" name="message" id="message"></textarea>
                </div>
                <button id="btn-envoi" type="submit" class="btn pull-right">Envoyer</button>
                
                <h4 id="form-valide" class="hidden">Message envoyé !</h4>
                <h4 id="form-erreur" class="hidden">Un ou plusieurs champs manquants.</h4>
            </form>
        </div>
    </div>
</div>

