$(document).ready(function(){

/*
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
--------------------------VARIABLES
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
*/    
//-------------------------Données Ecran

    
//-------------------------Menu Main
    var aMain = $("#menumain li a");
    var classMain = "main-active";

//-------------------------Menu Projet
    var liProjet = $("#menuprojets li");
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

    //ajoutClass(aMain, classMain, false);
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
 * SMOOTHSCROLL
 ******************************
 fonction permettant un scroll fluide
    Paramètres:
        -idancre: récupère l'attribut href du menu, supprime "index.php" de l'ancre
            ==> résultat ["", #ancre], besoin que de la case [1]
        -idancretop: récupère la position de l'ancre par rapport au top de la page
*/ 
    $(".smoothscroll").click(function(event)
    {
         
        var idancre = $(this).attr("href").split("index.php")[1];
        var idancretop = $(idancre).offset().top;
        $("html, body").animate
        ({
            scrollTop : idancretop
        }, 800);
        
        event.preventDefault();
    });
 
/*
 ******************************
 * SCROLL
 ******************************
 fonction changeant nav actif au scroll
********************************************************
* scrollPosition: position verticale du scroll
* idAncre: id de l'ancre où l'écran est
* aPosition: position de la section par rapport au top
* hauteurSection: hauteur de l'onglet en question (position de la section + sa taille totale = hauteur)
* positionEcran: position verticale de l'écran
* longueurEcran: longueur de la page
* longueurPage: longueur de la page totale    
********************************************************    
    si la position du haut de l'écran >= à position de la section correspondante (liPosition)
    && qu'elle est inférieure à la taille de cette section (liPosition + aHref.height)
        --> Ajout class active
    
    si positionEcran + longueurEcran = longueur totale de la page 
        --> arrivé au bout de la page
        --> ajout class active à l'item contact
*/     
  $(document).on("scroll", scrollActif);
  
    function scrollActif(event)
    {
        var scrollPosition = $(document).scrollTop();
        
        aMain.each(function(){
            
            //-------------------------------Données Ecran
            var aActif = $(this);
            var idAncre = $(aActif.attr("href").split("index.php")[1]);
            var aPosition = idAncre.offset().top;
            var hauteurSection = aPosition + idAncre.height();
            var positionEcran = $(window).scrollTop();
            var longueurEcran = $(window).height();
            var longueurPage = $(document).height();  
            

            //-------------------------------Affichage    
            //Tout
            if(scrollPosition >= aPosition && hauteurSection > scrollPosition)
            {
                aMain.removeClass(classMain);
                aActif.addClass(classMain);   
            }
            
            //Contact
            if(positionEcran + longueurEcran == longueurPage)
            {
                aMain.removeClass(classMain);
                $("#menumain #contactmenu").addClass(classMain);
            }   
        });
        
        event.preventDefault();
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

    
/*
 ******************************
 * SURVOL BOOTSTRAP
 ******************************

$("#menumain li").hover(function(){
    console.log("yo");
    $(this).css("background-color","none");
} );*/ 
});
