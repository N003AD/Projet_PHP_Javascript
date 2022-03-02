<?php

/**
* Chemin sur dossier racine du projet
*/
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
/**
* Chemin sur dossier src qui contient les controllers et les modeles
*/
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
/**
* Chemin sur dossier templates du projet
*/
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
/**
* Chemin sur data qui contient le fichier Json db.json
*/
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");
/**
* Chemin sur le dossier public , pour inclusion des images,css et js
*/
define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
/**
* Chemin sur l'action des formulaires: Requête GET et POST
*/
define("WEB_ROOT","http://localhost:8002/"); // URL quand on veut envoyé des requêtes

/*
     URL charger les images, CSS et JS */

define("WEB_PUBLIC",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));


// Quand on déploit le projet on met au niveau du http l'URL du serveur en ligne

// Cle d'erreurs
define("KEY_ERRORS","errors");

// Cle d'accés à l'utilisateurs connécté
define("KEY_USER_CONNECT","user-connect");
