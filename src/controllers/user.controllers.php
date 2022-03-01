<?php
    /**
    * Traitement des Requetes POST
    */
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_REQUEST['action'])){
            // Gestion des autorisations
            if(!is_connect()){ 
                header("location:WEB_ROOT");
                exit();
            }

            if($_REQUEST['action']=="connexion"){
                /* echo "Traiter le formulaire de connexion"; */
               echo "Bonjour";
                   
            }
        } 
    }


    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(isset($_REQUEST['action'])){
            if(!is_connect()){
                header("location:".WEB_ROOT);
                exit();
            }
            if($_REQUEST['action']=="accueil"){
                
                /* echo "Charger la page de connexion"; */
        
                // Il faut vérifier aussi est-ce que c'est un joueur ou c'est un admin qui c'est connecté
                    if(is_admin()){
                     // Si celui qui est connecté est un admin je recupére la liste des joueurs
                     lister_joueur();
                    }elseif (is_joueur) {
                        jeu();
                    }
                 
/*                 require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuil.html.php"); // Quand on est connecté sur la vue accueuil  */
            } // Liste joueur
            // Si action = user j'appelle
            elseif ($_REQUEST['action']=="liste.joueur" ) {
                # Si action = liste joueur j'appelle la user stories lister_joueur() et lui il va faire le traitement
               
                lister_joueur(); 


            }
        } /* else{
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuil.html.php");
        } */
        }

        function jeu(){
            // Le controller il est partie communiqué avec le modéle  
                // Appel du model et charge la vue et la vue exploite les données (lister_joueur)
        // Obs_start ( beufeur)
            ob_start();
           /*  $data= find_users("ROLE_JOUEUR"); */ // Recupére les données(la liste des données)
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."jeu.html.php"); // Charger la vue
            $content_for_views=ob_get_clean(); // Recupére le contenu d'une vue dans une variable
           // Require de accueil 
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuil.html.php"); // Cette variable là $content_for_views elle est affiché dans accueil 

        }   

    ?>

  <!-- Inclusion = fusion -->  
 