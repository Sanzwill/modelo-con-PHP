<?php  

require_once "conexion.php"

class ModeloFormularios{

static public function mdlRegistro($tabla, $datos)


}
$stamt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre , :email, :password)");

#bindParam
$stamt -> bindParam(":nombre", $datos ["nombre"],PDO::PARAM_STR);
$stamt -> bindParam(":email", $datos ["email"],PDO::PARAM_STR);
$stamt -> bindParam(":password", $datos ["psssword"],PDO::PARAM_STR);
if ($stamt->execute()){

    return "OK";
   { else}
   print_r(Conexion::conectar()->errorInfo());

}
$stamt->close();
$stamt-.null;



?>