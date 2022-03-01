<!-- Affiche la liste des joueurs il n'a pas besoin de menu  -->

    <div style="margin: 50px 70px;">
         <table>
             <!-- Indépendant de l'affichage -->
             <tr>
                <th>Nom</th> 
                <th>Prénom</th>
                <th>Score</th>
             </tr>
             <?php foreach ($data as $value):?>
             <tr>
                 <!-- Je vais afficher -->
                <td><?=$value['nom']?></td> 
                <td><?=$value['prenom']?></td>
                <td><?=$value['Score']?></td>
             </tr>
             <!-- Je fais tableau j'ai beaucoup d'utilisateurs c'est pourquoi je parcours 
              Chaque élément est un utilisateur -->
         <?php endforeach ?>
         </table>
    </div>


<!-- Maintenant quand je clique sur le lien c'est les lien qui doit charger   -->