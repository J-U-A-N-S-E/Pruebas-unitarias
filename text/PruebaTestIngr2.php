<?php



class PruebaTestIngr2 extends \PHPUnit\Framework\TestCase {
    public  function test_testingr2 (){
        $fecha="";
        $documento="897786568";
        $ingreso="7:46 AM";
        include ("Ifingreso2.php");
        $con = conecta::conectar();
         $test= testingreso2::ingreso2($con,$fecha,$documento,$ingreso);

         $this->assertEquals($test,'vales monda no servis ni para escribir un numero');

    }


}