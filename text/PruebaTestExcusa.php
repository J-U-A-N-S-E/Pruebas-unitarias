<?php

use app\formularios\conecta;
use app\formularios\testexcusa;

class PruebaTestExcusa extends \PHPUnit\Framework\TestCase {
    public  function test_excusa (){

        $nombre="Sebastian";
        $apellido="Angulo lozano";
        $fecha="24-08-2022";
        $descripcion="esta excusa es para decir que falte el dia de ayer";
        $ruta="imag/achivo/diccionariocomico";
        $docu="10029442221";
        $curso="801";
        $s111="10029938842";
        include ("excusa.php");
        $con = conecta::conectar();
         $test= testexcusa::excusa($con,$nombre,$apellido,$fecha, $descripcion, $ruta,$docu,$curso,$s111);

         $this->assertEquals(1,$test);

    }


}