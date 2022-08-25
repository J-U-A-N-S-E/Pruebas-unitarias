<?php



class PruebaTestCurso extends \PHPUnit\Framework\TestCase {
   
    public function testxxx (){
        
     
        include("curso.php");
        $fifa=1927902;
       $con= cone::conect();
       $Cla=x::xx($con,$fifa);

      
          $this->assertEquals($Cla,601);
    }



}