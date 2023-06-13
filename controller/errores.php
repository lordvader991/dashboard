<?php
class Errores extends Controller{
    
    function __construct(){
        echo "No existe el recurso";
        parent::__construct();
        echo "<p>Error al cargar el recurso</p>";
    }
}
?>