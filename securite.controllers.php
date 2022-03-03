<?php

require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
    /**
    * Traitement des Requetes POST
    */
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_REQUEST['action'])){
            if($_REQUEST['action']=="connexion"){
 /*                echo "Traiter le formulaire de connexion";  */ 
 /* La recupération on va le faire ici on sait que on a un formulaire */
 
           die("Je suis sur l'action de connexion");
            $login=$_POST['login'];
            $password=$_POST['password']; 
            connexion($login,$password);
            /* Celà veux dire qu'il clique sur la boutton connexion je recupére les données et j'appelle ma fonction CONNEXION et dérrière c'est elle qui va s'exécuter */
            }
        /* On vient de dire le champ input de type login sur lequel on doit saisir le login doit avoir comme name login 
        Et le champ password sur lequel on doit saisir le password  doit avopir comme name password 
        et là on vient de faire la récupération des données.*/

        } 
    }


    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(isset($_REQUEST['action'])){
            if($_REQUEST['action']=="deconnexion"){
               /*  echo "Charger la page de connexion"; */
               // Charge la vue de connexion qui se trouve dans template

               require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            }else{ 
                logout();
            }
        }else{
          /*   echo "Charge la page de connexion"; */
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
        }
        }

/* Le Us1 je vais lui représenté par une fonction*/
    function connexion(string $login, string $password):void{
        /* Une fois que la fonction connexion est déclenché je vais l'appeler en haut et je vais lui donner le login et le mot de passe  */
        /* Qu'est ce que cette fonction doit faire elle doit valider les données. 
    Mais valider les données y a quelqu'un qui le fait c'est le validator.php , dans le config on n'a le validator */
    $errors=[];
    champ_obligatoire('login',$login,$errors, "login obligatoire");
   //  Si c est le cas je vérifie est-ce qu il y a une erreur de login
     if(count($errors)== 0){ // Je compte les erreurs
     valid_email('login',$login,$errors);
     }
     champ_obligatoire('password',$password,$errors, "champ obligatoire");
// Là j'ai fait la validation des données
 
   // Je vais vérifié est-ce que les données sont valides 
    if(count($errors)== 0){ // Je compte les erreurs
        // Je mets ici un else qui est le scénario d'alternace( Y a des erreurs) on  stocke les erreurs dans la session et on le redrige vers la page de connexion.
        // POur pouvoir utiliser la session il faudra la démarrer
     // On définie la session au niveau du front controller car toute les requêtes passent par le front    
     // Appel d'une fonction du model
     $user=find_user_login_password($login,$password); // On a recupéré l'utilisateur
       
     // ON compte est-ce qu'il y a un utilisateur
     if(count($user)!=0){ 
         var_dump($user);die();
         // Utilisateur existe
         $_SESSION["KEY_USER_CONNECT"]=$user;
         // Moi je ne veux pas aller au niveau de la page de connexion mais au niveau de la page d'accueil  
         header("location:".WEB_ROOT."?controller=user&action=accueil");
     }else{ // Utilisateur n'existe pas 
        $errors['connexion']="login ou Mot de passe incorrect"; // stock l'erreur dans le tableau d'erreur
        $_SESSION['KEY_ERRORS']=$errors; // Ensuite je le stock dans la session
        // Quand il y a erreur il faut le redrigé vers la page d’acceuil
        header("location:".WEB_ROOT); 
        exit();
     }

    }else{
        // Erreur de validation
        $_SESSION['KEY_ERRORS']=$errors; // je stock les erreurs 
        // et je le redrige vers la page d acceuil
        header("location:".WEB_ROOT); // Je vais l'amener dans localhost  8002.Si l'action n'existe pas automatiquement il va l'envoyer dans le formulaire de connexion 
        // On avait définit comme constante qui s'appelle WEB_ROOT;
      exit();
    }  
}
       function logout(){
           session_destroy(); // détruit la session
           header("location:".WEB_ROOT);
           exit();
        }
    ?>
 