<?php
class View{
    function __construct(){
        //echo "<br>Vista base<br>";
    }
    function render($nombre){
        $ruta_vista = "views/".$nombre.".php";
        //echo "ruta_vista:".$ruta_vista;
        require $ruta_vista;


    }
}
?>