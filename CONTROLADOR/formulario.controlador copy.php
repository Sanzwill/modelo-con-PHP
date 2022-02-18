<?php

class ControladorFormulario

{

      static public function crtRegistro()
    {
        if (isset($_POST['registroNombre'])){
            // echo "<p>  Prueba de controlador</p>";
           // return $_POST['registroNombre']."<br>".$_POST['registroEmail']."<br>".$_POST['registroPassword']."<br>";
            
        ///return "OK";

        $tabla ="registro";
        $datos = array('nombre' => $_POST["registroNmobre"], 
                      ('email' => $_POST["registroEmail"],
                      ('password' => $_POST["registroPasword"]);
          echo "<pre> print_r($ ;"            
        // $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
        // return $respuesta;
        }
    }
}


?>