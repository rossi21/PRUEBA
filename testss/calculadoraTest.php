<?php
use PHPUnit\Framework\TestCase;
class calculadoraTest extends TestCase
{
 function testSuma()
  {
  	include "class/calculadora.php";
 	 	$calculadora=new Calculadora();
 	 	$s=$calculadora->suma(5,7);
 	 	$this->assertEquals($s,12);
 }
}
?>