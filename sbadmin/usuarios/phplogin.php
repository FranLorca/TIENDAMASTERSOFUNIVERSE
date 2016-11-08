<?php

function autocarga($clase) {
    include '../clases/'.$clase . '.php';
}
spl_autoload_register('autocarga');

$user = Peticion::post("user");
$pass = sha1(Peticion::post("pass"));

$bd = new BaseDatos();
$gestor = new GestionUsuario($bd);
$usuario=$gestor->get($user);
$bd->closeConexion();

if ($usuario != NULL){
    $clave = $usuario->getPass();
    if($clave == $pass)
        header("Location: ../index.php?mensaje=ok&op=login");
        $sesion=new Sesion();
        
       
        header("Location: ../index.php?mensaje=false&op=login");
}
    
