<?php
class Categoria extends Controller{
    function __construct() { 
       // parent::__construct();
        parent::__construct();
        $this->view->render("categoria/index"); 
        //parent::demo(); //para llamar al constructor del controller
       // echo "Llamaste al Controlador categoria";
    }
}
?>