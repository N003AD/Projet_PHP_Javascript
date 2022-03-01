
   <!-- 1- Partie header-->
<?php
    // Layout ou page de Présentation: Toute les style et les présentations doivent se faire sur accueil
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
    ?>
         
          <!-- 1- Partie menu --> 
<ul>
  <li><a class="active" href="<?=WEB_ROOT."?controller=user&action=accueil"?>">Accueil</li>
  <?php if(is_admin()):?>
  <li><a href="<?=WEB_ROOT."?controller=&action=liste.joueur"?>">Liste des Joueur</a></li>
  <?php endif ?>   

  <!-- La déconnexion est géré par  le controller securite -->
  <li><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></li>
 
</ul>    


   <!-- Dans ma page d'accueil j'auirais une variable -->
     <?php
      //  Le contenu des Vues( contenu vue liste joueurs)
      echo $content_for_views; // Le rôle content_for_views c'est de récupérer le contenu de liste 

     ?>

      <!-- 2- Partie footer -->
<?php
       require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
    ?>
