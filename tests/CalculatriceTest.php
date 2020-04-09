<?php


namespace Test;

use App\Calculatrice;
use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
    public function Testaddition($x, $y)
    {
        $calculatrice = new Calculatrice();
        $result = $calculatrice->addition(4,16);
        $this->assertEquals(20, $result);
    }

    public function Testsoustraction($x, $y)
    {
        $calculatrice = new Calculatrice();
        $result = $calculatrice->soustraction(24,16);
        $this->assertEquals(8, $result);
    }

    public function Testmultiplication($x, $y)
    {
        $calculatrice = new Calculatrice();
        $result = $calculatrice->multiplication(4,16);
        $this->assertEquals(20, $result);
    }

    public function Testdivision($x, $y)
    {
        $calculatrice = new Calculatrice();
        $result = $calculatrice->division(20,2);
        $this->assertEquals(20, $result);
    }
}