<?php
namespace app\formularios;

class conecta{
public static function conectar(){
  $host="localhost";
  $user="root";
  $pass="";
  $bd="accesspask";
  $con=mysqli_connect($host,$user,$pass);

  mysqli_select_db($con,$bd);

  return $con;
}
}

class testexcusa{
public static function excusa($con,$nombre,$apellido,$fecha, $descripcion, $ruta,$docu,$curso,$s111){
         $insertar ="insert into excusas(nombre,apellido,fecha,descripcion,archivo,documento, curso ,Docu_Dest) values ('$nombre','$apellido', 
         '$fecha', '$descripcion', '$ruta','$docu', '$curso','$s111')";
         $resultado = mysqli_query($con,$insertar);
         $result= mysqli_affected_rows($con);
return $result;
}
}

?>