<?php



class PruebaTestIngr extends \PHPUnit\Framework\TestCase {
    public  function test_testingr2 (){
        $fecha="2022-08-24";
        $documento="897786568";
        $ingreso="7:46 AM";
        include ("Ifingreso2.php");
        $con = conecta::conectar();
         $test= testingreso2::ingreso2($con,$fecha,$documento,$ingreso);

         $this->assertEquals($test,'su registro fue exitoso come back bro');

    }


}