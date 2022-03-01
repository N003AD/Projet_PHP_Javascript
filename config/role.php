<?php
    define("ROLE_JOUEUR","ROLE_JOUEUR");
    define("ROLE_ADMIN","ROLE_ADMIN");
// Je vais faire la gestion des autorisations 
// est-ce que c'est connécté
    function is_connect(){
        // Si KEY_USER_CONNECT existe dans la session
        // Retourne un boolean
    }
  
    function is_joueur(){
        // POur qu'il soit un joueur il faudra qu'il soit connécté et son role = à joueur
        return is_connect() && $_SESSION[KEY_USER_CONNECT]['role']=="ROLE_JOUEUR";
    }

    function is_admin(){
        return is_connect() && $_SESSION[KEY_USER_CONNECT]['role']=="ROLE_ADMIN";
    }
    

?>