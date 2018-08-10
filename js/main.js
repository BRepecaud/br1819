$(document).ready(function(){

/*
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
--------------------------VARIABLES
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
*/    

//-------------------------Menu Main
    var liMain = $("#menumain li");
    var classMain = "main-active";

//-------------------------Menu Projet
    var liProjet = $("#menuprojet li");
    var classProjet = "categorie-active";
    var allProjet = $(".projet");

//-------------------------Class
    var classDev = "developpement";
    var classInfo = "infographie";
    var classVideo = "video";  

//-------------------------Paramètres animations
    var vitesseIn = 2000;
    var vitesseOut = 500;

//-------------------------Formulaire
    var blocFormulaire = $("#form-contact");
    var champFormulaire = $(".form-control");
    var btnFormulaire = $("#btn-envoi");
    var messageErreur = $("#form-erreur");
    var messageValide = $("#form-valide");
/*
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
--------------------------FONCTIONS
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
*/ 

    ajoutClass(liMain, classMain, false);
    ajoutClass(liProjet, classProjet, true);     
/*
 ******************************
 * AJOUT CLASSE ACTIVE
 ******************************
 fonction ajoutant la classe active à l'item cliqué
    Paramètres:
        -chemin du li correspondant 
        -nom de la classe à ajouter
        -booléen pour l'exécution du filtreprojet
*/    
    function ajoutClass(cheminLi, nomClass, ouiNon)
    {
        cheminLi.stop().click( function() {
            $("."+nomClass).toggleClass(nomClass);
            $(this).toggleClass(nomClass);

            if(ouiNon === true)
            {
              filtreProjet($(this));              
            }
            
            //--------Empêche le menu de fonctionner
            //event.preventDefault();
        });           
    }
    
/*
 ******************************
 * FILTRE DES PROJETS
 ******************************
--> suivant la categorie active (passée en paramètre): affiche les projets en question
--> appel de la fonction afficheProjet
*/ 
    function filtreProjet(categorie)
    {
        if(categorie.hasClass(classDev))
        {
            afficheProjet(classDev);
        }
        else if(categorie.hasClass(classInfo))
        {
            afficheProjet(classInfo);
        }
        else if(categorie.hasClass(classVideo))
        {
            afficheProjet(classVideo);
        }
        else
        {
            afficheTout();
        }
    }

/*
 ******************************
 * AFFICHAGE
 ******************************
-->affichage des projets suivant la class passée en paramètre
*/ 
    function afficheProjet(nomCategorie)
    {
        $(".projet").fadeOut(vitesseOut);
        $(".picto-categorie").fadeOut(vitesseOut);
        
        $("."+nomCategorie).fadeIn(vitesseIn);        
    }
    
    function afficheTout()
    {
        allProjet.fadeOut(vitesseOut);
        allProjet.fadeIn(vitesseIn);
    }


/*
 ******************************
 * CHAMP FORMULAIRE
 ******************************
-->champ vert ou rouge si rempli ou non (blur: quitte du focus)
*/ 
    champFormulaire.blur(function( )
    {
        if(!$(this).val())
        {
            $(this).parent('div').removeClass('has-success');
            $(this).parent('div').addClass('has-error');
        }
        else
        {
            $(this).parent('div').removeClass('has-error');
            $(this).parent('div').addClass('has-success');
        }
    } );

/*
 ******************************
 * ENVOI FORMULAIRE
 ******************************
-->1- event pour ne pas changer d'écran / ne pas charger mail.php
-->2- appel envoiForm()
*/     
    blocFormulaire.submit(function(event)
    {
        event.preventDefault();
        envoiForm();
    });

/*
 ******************************
 * ENVOI FORMULAIRE
 ******************************
-->récupération des valeurs de chaque champ
-->ajax: 
    envoi des données à mail.php
    si succes: affichage messageValide
    sinon: affichage messageErreur
*/       
    function envoiForm()
    {
            
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var email = $("#email").val();
        var objet = $("#objet").val();
        var message = $("#message").val();
        
        $.ajax
        ({
           type:"POST",
           url:"modele/mail.php",
           data:"nom=" + nom + "&prenom=" + prenom + "&email=" + email + "&objet=" + objet + "&message=" + message,
           success: function(text)
           {
               if(text == true)
               {
                    messageErreur.addClass("hidden");
                    messageValide.removeClass("hidden");
               }
               else
               {
                    messageValide.addClass("hidden");
                    messageErreur.removeClass("hidden");
               }
           }
        });
    }
    
});
