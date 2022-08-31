<?php


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
public static function excusas($con,$nombre,$apellido,$fecha, $descripcion, $ruta,$docu,$curso,$s111){
  if ($ruta<>Null){
         $insertar ="insert into excusas(nombre,apellido,fecha,descripcion,archivo,documento, curso ,Docu_Dest) values ('$nombre','$apellido', 
         '$fecha', '$descripcion', '$ruta','$docu', '$curso','$s111')";
         $resultado = mysqli_query($con,$insertar);
         $result= mysqli_affected_rows($con);
         
         if($resultado){
        return 'se ha enviado su excusa';

      }
      }
      else{
        return 'error al subir, digite nuevamente';
       
       }

}
}

?>