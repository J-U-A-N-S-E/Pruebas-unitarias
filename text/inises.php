<?php
class ini{
  public static function ses($con,$doc){
    
   
  $consulta= "SELECT * FROM usuario WHERE documento = '$doc'  ";
  $filas=mysqli_query($con, $consulta);
  
  $Almacen_user_consul=mysqli_fetch_row($filas);
  $resultado=$Almacen_user_consul[0];
  
  return $resultado;
  }
  }
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
  
  ?>