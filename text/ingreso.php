<?php
namespace app\formularios;

use mysqli;

class conecta{
public static function conectar(){
  $host="localhost";
  $user="root";
  $pass="";
  $bd="accesspask";
$conexion= new mysqli($host,$user,$pass,$bd);
return $conexion;
}
}

class testEntrada
{
public static function entrada($con,$fecha,$ingreso,$documento,$estado){
$consulta="INSERT INTO tiempo ( hin,fecha,documento, estado) values('$ingreso','$fecha','$documento',1)";
$lol= mysqli_query($con,$consulta);
$result= mysqli_affected_rows($con);
return $result;
}
}

?>