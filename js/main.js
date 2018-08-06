$(document).ready(function(){
   
/*
 ******************************
 * AJOUT CLASSE ACTIVE
 ******************************
 fonction ajoutant la classe active à l'item cliqué
    Paramètres:
        -chemin du li correspondant 
        -nom de la classe à ajouter
*/
    var liMain = $("#menumain li");
    var classMain = "main-active";
    
    var liProjet = $("#menuprojet li");
    var classProjet = "categorie-active";

    function ajoutClass(cheminLi, nomClass)
    {
      cheminLi.click( function() {
          $("."+nomClass).toggleClass(nomClass);
          $(this).toggleClass(nomClass);
      });        
    }
    
    ajoutClass(liMain, classMain);
    ajoutClass(liProjet, classProjet);
   
 
    // if class == dev --> effacer tout + afficher div à la class dev
    // if class == infographie --> effacer tout + afficher div à la class infographie
    // if class == video --> effacer tout + afficher div à la class video
   
   
   
   
   
   
   
   
   
   
});
