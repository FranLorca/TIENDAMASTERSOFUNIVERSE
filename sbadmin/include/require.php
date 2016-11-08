<?php
function autocarga($clase) {
    include_once 'clases/'.$clase . '.php';
}
spl_autoload_register('autocarga');
//$sesion= new Sesion();

?>