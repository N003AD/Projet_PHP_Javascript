<?php

    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
    // Je vérifie est-ce que dans la sessionil y a erreur
    if(isset($_SESSION['KEY_ERRORS'])){
    $errors=$_SESSION['KEY_ERRORS'];
    unset($_SESSION['KEY_ERRORS']);
    }
    ?>
        <div id="container">
            <!-- zone de connexion -->
            <!-- En plus de sa il faudra dire ou est-ce qu'on doit envoyé les informations : On sait que les informations doivent être envoyé sur le controller=securite et dans le controller.securite on doit l'envoyez dans l'action de connexion-->
            <!-- ON ne peut pas l'écrire sa au niveau de l'action car on 'est pas dans le $_GET -->

            <form action="<?=WEB_ROOT?>" method="POST">
               <!-- On va venir créer 2 types de champ de type hidden  -->
               <input type="hidden" name="controller" value="securite">
               <input type="hidden" name="action" value="connexion">
               <!-- Celà veut dire que les infos de l'action et du controller sont dans la requêtes mais ou dans le POST: c'est comme ça qu'on envoie la requête coé POST  -->
               <h1>Connexion</h1>
             <!-- On va afficher les zones d'erreurs  -->
                <!-- On va l'afficher que s'il y a erreur de connexion -->
               <?php if(isset($errors['connexion'])):?>
  
                <p style="color:red"> <?=$errors['connexion']; ?></p> 
              
                <?php endif ?>
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login">
                <?php if(isset($errors['connexion'])):?>

                <p style="color:red"> <?=$errors['login']; ?></p> 

                <?php endif ?>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password">
                <?php if(isset($errors['connexion'])):?>

                <p style="color:red"> <?=$errors['password']; ?></p> 

                <?php endif ?>
                <input type="submit" id='submit' value='LOGIN' >
 
            </form>
        </div>
     <?php
       require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
    ?>
       