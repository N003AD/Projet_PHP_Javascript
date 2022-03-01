

    <?php
    // Je vais définir mes fonctions de validation

    function champ_obligatoire(string $key,string $data,array &$errors,string
        $message="ce champ est obligatoire"){
            if(empty($data)){
            $errors[$key]=$message;
            }
        }
    function valid_email(string $key,string $data,array &$errors,string $message="email invalid"){
        if(!filter_var($data,FILTER_VALIDATE_EMAIL)){ //Equivalent à ==false [if(filter_var($data,FILTER_VALIDATE_EMAIL)==false)]
        $errors[$key]=$message;
        }
    }
    function valid_password(string $key,string $data,array &$errors,string
        $message="password invalid"){
            // La valiadation du mot de passe c'est à nous de le faire
}