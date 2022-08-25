<?php



class PruebaTestMirexcusa extends \PHPUnit\Framework\TestCase {
   
    public function testxxx (){
        
     
        include("MirarExc.php");
        $fifa=1425687;
        $fifa2=1927902;
       $con= cone::conect();
       $Cla=x::xx($con,$fifa,$fifa2);
       foreach($Cla as $v){
        $n=$v['nombre'] ;
        $a=$v['apellido'] ;
        $f=$v['fecha'] ;
        $d=$v['descripcion'] ;
        $a2=$v['archivo'] ;
 
        }
          $this->assertEquals($n,'sarita');
          $this->assertEquals($a,'la zorra');
          $this->assertEquals($f,'2022-08-02');
          $this->assertEquals($d,'SIUUUUUUUUUUUU');
          $this->assertEquals($a2,'../img/Consultas de Base de Datos - Skollab.pdf');

    }



}