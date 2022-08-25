<?php

class x{
public static function xx($con,$fifa){
  
 
$consulta= "Select Curso from asignacion where $fifa=docu  ";
$filas=mysqli_query($con, $consulta);

$Almacen_user_consul=mysqli_fetch_row($filas);
$resultado=$Almacen_user_consul[0];

return $resultado;


  
}

}

class cone{

  public static function conect(){

    $host="localhost";
    $user="root";
    $pass="";
    $bd="accesspask";
  $conexion= new mysqli($host,$user,$pass,$bd);
  return $conexion;
  }
}