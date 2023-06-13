<?php
class Main extends Controller{
    function __construct() {
        parent::__construct();
        $this -> view -> render("main/index"); 
        //echo "Llamaste al controlador Main";
    }

    function saludar(){
        echo "<br>hola desde main";
    }
}
?>