<?php



class PruebaTestIfexcuPar2 extends \PHPUnit\Framework\TestCase {
    public  function test_ifexcusaPart2 (){

        $nombre="Sebastian";
        $apellido="Angulo lozano";
        $fecha="2022-08-24";
        $descripcion="esta excusa es para decir que falte el dia de ayer";
        $ruta="";
        $docu="10029442221";
        $curso="801";
        $s111="10029938842";
        include ("ifexcusaPar2.php");
        $con = conecta::conectar();
         $test= testexcusa::excusas($con,$nombre,$apellido,$fecha, $descripcion, $ruta,$docu,$curso,$s111);

         $this->assertEquals($test,'error al subir, digite nuevamente');

    }


}