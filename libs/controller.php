<?php
class Controller{
    function __construct(){
        //echo "Vista controlador<br>";
        $this->view = new View();
        
    } 
    function loadModel($model){
        $url = 'models/'.$model.'model.php';
        if(file_exists($url)){
            require $url;
            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
   /* function demo(){
        echo"<p>Me llamaste!</p>";
    }*/

}
?>