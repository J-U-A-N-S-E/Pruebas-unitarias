<?php



class PruebaTestWhilerol extends \PHPUnit\Framework\TestCase {
   
    public function testxxx (){
        
     
        include("whileRol.php");
       $con= conecta::conectar();
       $Cla=testexcusa::while($con);
$array = [
    'Administrador' => 'Administrador',
    'Maestro' => 'Maestro',
    'Alumno' => 'Alumno',


];
$array2 = [
    1=> 1,
    2 => 2,
    3=> 3,
 

];

       
       while ($Rol=mysqli_fetch_array($Cla))
   


       {
         echo "<option value='".$this->assertArrayHasKey($Rol['idRol'], $array2)."'>" .  $this->assertArrayHasKey($Rol["Rol"], $array,) . "</option>";
       }

    }



}