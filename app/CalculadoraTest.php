<?php
require_once(__DIR__.'/Calculadora.php');
use \PHPUnit\Framework\TestCase;
class CalculadoraTest extends TestCase{
    public function testSumar(){
        $calculadora = new Calculadora();
        //$this->assertEquals(10,$calculadora->sumar(8,2));
        $this->assertSame(10,$calculadora->sumar(8,2));
    }
    public function testRestar(){
        $calculadora = new Calculadora();
        $this->assertEquals(6,$calculadora->restar(8,2));
    }
    public function testMultiplicar(){
        $calculadora = new Calculadora();
        $this->assertEquals(16,$calculadora->multiplicar(8,2));
    }
    public function testDividir(){
        $calculadora = new Calculadora();
        $this->assertEqualsWithDelta(0.33,$calculadora->dividir(1,3), 0.003);
    }
    public function testGenerarArreglo(){
        $calculadora = new Calculadora();
        //$this->assertContains(5, $calculadora->generarArreglo());
        //$this->assertCount(6, $calculadora->generarArreglo());
        $this->assertNotEmpty($calculadora->generarArreglo());
    }
}