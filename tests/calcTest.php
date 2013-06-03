<?php
require('../www/calc.php');
require_once "PHPUnit/Framework/TestCase.php";
class CalcTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 * @covers Calc::mult
	 */
 public function testMult()
 {
   $calc = new Calc();
   $this->assertEquals(4,$calc->mult(2,2));
 }
}
