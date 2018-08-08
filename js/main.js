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
        cheminLi.stop().click( function(event) {
            $("."+nomClass).toggleClass(nomClass);
            $(this).toggleClass(nomClass);

            if(ouiNon === true)
            {
              filtreProjet($(this));              
            }

            event.preventDefault();
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


});
