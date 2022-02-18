<?php 

#Index: aqui se mostrara la salida de las vistas de los usuarios y las acciones que se envien  al controlador.
#Codigo que ha de invocar a plantillas y formularios metodo "require()". 


require_once "CONTROLADOR/plantilla.controlador.php";
require_once "CONTROLADOR/formulario.controlador.php";
require_once"MODELO/conexion.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();

 ?>