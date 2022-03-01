    <?php
     
    if(isset($_REQUEST['controller']) ){
        switch ($_REQUEST['controller']) {
            case "securite" :
               
            require_once(PATH_SRC."controllers/securite.controllers.php");
            break;
            case "user" :
            require_once(PATH_SRC."controllers/user.controllers.php");
            break;
        }
}else{
        require_once(PATH_SRC."controllers/securite.controllers.php");
        }
/* Le default ça veut dire que sa n'existe pas si le controller n'existe pa 
le visiteur à cliquez sur qlq chose qui n'existe pas donc 
il faut créer un controller d'erreur */