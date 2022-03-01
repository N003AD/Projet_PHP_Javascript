<!-- Là aussi j'aurais besoin toutes les requêtes d'informations parraport à l'utilisteur
Maintenant le user.model.php c'est lui qui va utilser l'OREM parceque le rôle du json c'est juste que de faire des conversions.

Parexemple: Je veux me connecter , lui (orem) il va prendre ces informations il va aller recupéré le tableau d'utilisateur et va vérifier est-ce que le login et le mot de passe existe dans le tableau utilisateur ,

Un joueur veux s'inscrire qu'est ce qu'on va faire: 
On va nous envoyez les données à travers le POST  on les recupére on les formatent dans un tableau on le donne à ORM , et ORM va prendre ce tableau et va lui transformé en JSON.
 
Donc on a notre model

<?php 
function find_user_login_password(string $login,string $password):array{
    $users=json_to_array("users"); // Je recupére les données de l'utilisateur se trouvant dans le fichier Json qui le fait c'est l'ORM.Je vais aller dans l'ORM
 // $users=json_to_array("users"); Il va aller dans le fichier Json, il va me recupérer les utilisateurs du fichier et il va me le stocker dans le tableau  
 // Et après il va me retourner les donnnées correspondant à la clé vous demandé        $data=json_decode($dataJson,true); 
        foreach ($users as $user) {
        if( $user['login']==$login && $user['password']==$password)
        return $user;
        }
    return [];
    }

    // Je recupére tous les utilisateurs se trouvant dans le fichier json
       function find_user ($role):array{
        $users=json_to_array("users");
        foreach ($users as $user) {
        if( $user['role']==$role)
        $result[]=$users;
        }
        return $user;
        }  

   
        /// L'erreur se trouve au niveau du user.model.php ////
        
    
