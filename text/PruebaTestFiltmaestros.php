<?php

use app\formularios\conecta;
use app\formularios\testfriltroma;

class PruebaTestFiltmaestros extends \PHPUnit\Framework\TestCase {
    public  function test_excusa (){

        $buscar= 1927902;
        
        include ("FiltMaestro.php");
        $con = conecta::conectar();
         $test= testfriltroma::usuario($con,$buscar);
         foreach($test as $v){
            $n=$v['Nombre'] ;
            $a=$v['Apellido'] ;
            $f=$v['documento'] ;
            $d=$v['correo'] ;
            }
              $this->assertEquals($n,'neymar');
              $this->assertEquals($a,'jr');
              $this->assertEquals($f,1927902);
              $this->assertEquals($d,'firu022@gmail.com');

    }


}