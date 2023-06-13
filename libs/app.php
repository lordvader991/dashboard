<?php
    class App{
        function __construct(){

         //   echo "<p>Mi aplicacion en WEB II</p>";
            $url = $_GET['url'];
           // echo $url;
            //echo "<br>";
            $url = explode("/",$url);
          //  echo $url[0];
           // echo"<br>";
            $ruta = "controller/".$url[0].".php";
          //  echo $ruta;
            //echo"<br>";
            if (file_exists($ruta)){
                require_once $ruta;
                $c = new $url[0];
                //verificar metodo en #url[1]
                if (isset($url[1])){
                    $c->{$url[1]}();
                    //$c->saludar();
                }
            }else{
                require_once "controller/errores.php";
                $e = new Errores();
            }
        }
    }

?>