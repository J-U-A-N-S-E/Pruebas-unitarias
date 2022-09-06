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

class testingreso2{
public static function ingreso2($con,$fecha,$documento,$ingreso){

  $consult="SELECT documento FROM usuario where documento='$documento'";
  $ejecut = mysqli_query ($con,$consult);
  
  foreach ($ejecut as $key) {
      if($documento=$key["documento"] and $fecha <> null){
          $consulta="INSERT INTO tiempo ( hin , fecha,documento, estado) values('$ingreso','$fecha','$documento',1)";
  $ejecutar = mysqli_query ($con,$consulta);
  if($ejecutar){
    return 'su registro fue exitoso come back bro';
 
 } }
 else {
             return 'vales monda no servis ni para escribir un numero';
  
          }}
         
  
}
}

?>