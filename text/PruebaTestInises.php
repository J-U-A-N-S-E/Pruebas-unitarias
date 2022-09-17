<?php



class PruebaTestInises extends \PHPUnit\Framework\TestCase {
   
    public function testxxx (){
        
        include("inises.php");
        $doc=1000933126;
        $con= conecta::conectar();
        $docu=ini::ses($con,$doc);
        
          $this->assertEquals($docu,1);
          /* $this->assertEquals($docu,MD5("1234")); */
          
    }



}
?>