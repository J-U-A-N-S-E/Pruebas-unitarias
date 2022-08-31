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
public static function while($con){
  $consulta= "Select * from rol ";
  $filas=mysqli_query($con, $consulta);

return $filas;
}
}

?>