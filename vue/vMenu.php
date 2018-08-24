<div class="container">
    <div class="row">
        <nav id="navbr" class="navbar navbar-fixed-top">
            <div class="container-fluid">  

                <!--------------------------------HAMBURGER + LOGO MENU--> 
                <div class="navbar-header">
                    <!-- HAMBURGER -->
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#menuprincipal">
                        <img id="hamburger" src="media/composants/hamburger.png" width="25em"> 
                    </button> 
                    <!-- LOGO MENU -->
                    <a id="menubrand" href="index.php#accueil"><!--class="navbar-brand"-->
                        <img src="media/logo_br_sombre.png" alt="Logo Benjamin Répécaud étudiant licence informatique" width="5%" >
                    </a>                    
                </div>                

                <!--Collapse: détecter le responsive-->
                <div  class="collapse navbar-collapse" id="menuprincipal">                
                    <!-- NAVIGATION (située à droite) -->
                    <ul id="menumain" class="nav navbar-nav navbar-right">
                        <li class=""> <!-- addClass active à la page active -->
                            <a href="index.php#accueil" class="main-active smoothscroll" id="accueilmenu">Accueil</a>
                        </li>
                        <li>
                            <a href="index.php#presentation" class="smoothscroll" id="presentationmenu">Présentation</a>
                        </li>
                        <li>
                            <a href="index.php#projets" class="smoothscroll" id="projetsmenu">Projets</a>
                        </li>                    
                        <li>
                            <a href="index.php#contact" class="smoothscroll" id="contactmenu">Contact</a>
                        </li>                    
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>