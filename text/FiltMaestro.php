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

class testfriltroma {
public static function usuario($con,$buscar){
  $consulta= "Select Nombre,Apellido,documento,correo from usuario where idrol=2 and documento='$buscar'";
         $resultado = mysqli_query($con,$consulta);
        
return $resultado;
}
}

?>