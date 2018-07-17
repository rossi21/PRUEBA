<?php

// require_once('../database/Database.php');
// require_once('../interface/iStock.php');
//require_once('../class/Stock.php');

include "repository/StockRepository.php";


//use PHPUnit\Framework\TestCase;

class StockTest extends PHPUnit_Framework_TestCase
{
	protected static $pdo;
//metodo para conexion a la base de datos
    public static function connectionbd() {
       try 
       {
            $host = 'mysql:host=localhost;dbname=inventario';
            self::$pdo = new PDO($host, 'root', '');
       }
       catch (\Exception $e) {
            $this->markTestSkipped('MySQL conection is not working.');
       }
    }//crea una instancia de la clase repositorio
    public function setUp() {   	
       	$this->stockRepository = new StockRepository(self::$pdo);
    }
    //prueba lista total de stock por cantidad
    public function testStockList() {
    	$list=$this->stockRepository->all_stockList(10);
    	$this->assertEquals(count($list),1);
    }//prueba retornar un usuario por nombre de usuario
    public function testGetUserByUser(){
    	$user=$this->stockRepository->getUserByUser('admin');   	
        $this->assertCount(1,$user);
    	
    }//prueba eliminar un stock por id
    public function testRemoveStock(){
    	$Stock=$this->stockRepository->removeStock(2);
    	
    	
    }
}
?>