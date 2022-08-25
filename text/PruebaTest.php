<?php

use app\formularios\conecta;
use app\formularios\testEntrada;

class PruebaTest extends \PHPUnit\Framework\TestCase {
    public function test_entrada (){

        $ingreso="8:43 PM";
        $fecha="2022-08-24";
        $documento="10064567823";
        $estado=1;
        include ("ingreso.php");
        $con = conecta::conectar();
         $test= testEntrada::entrada($con,$fecha,$ingreso,$documento,$estado);
        $this->assertEquals(1,$test);

    }


}
