<?php

    //Compruebo si ya hay una sesion establecida con una cookie
    //if (isset($_COOKIE["username"]) && isset($_COOKIE["passcode"])) {
    if (isset($_COOKIE) && isset($_COOKIE["user"])) {
        require_once("models/Validar.php");
        $validar = validarDatos();

        include_once("views/menu.php");
        
    } else {

            if (isset($_COOKIE["user"])) {
        
                echo "Usuario y/o contraseña incorrecto";
                unset($_COOKIE["user"]);
                setcookie("user" , '' , time()-3600, '/');
  
        }
        
        include_once("views/login.php");
    
    }



?>
