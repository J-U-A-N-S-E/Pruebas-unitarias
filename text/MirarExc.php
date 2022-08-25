<?php

class x{
public static function xx($con,$fifa,$fifa2){
  
  $consulta= "SELECT * FROM excusas where documento='$fifa' and Docu_Dest='$fifa2'";   
$filas=mysqli_query($con, $consulta);


 



return $filas;


  
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