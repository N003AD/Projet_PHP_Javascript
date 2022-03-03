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
               
                
            }
        } 
    }


    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(isset($_REQUEST['action'])){
            if($_REQUEST['action']=="accueil"){
                /* echo "Charger la page de connexion"; */
                require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuil.html.php");

            }
        } else{
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuil.html.php");
        }
        }

        function lister_joueur() {
            return find_users("ROLE_JOUEUR");
            }

    ?>
 