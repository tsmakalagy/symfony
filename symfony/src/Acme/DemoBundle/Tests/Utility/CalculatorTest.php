<?php
namespace Acme\DemoBundle\Tests\Utility;

use Acme\DemoBundle\Utility\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
	public function testAdd()
	{
		$calc = new Calculator();
		$result = $calc->add(30, 13);
		// assert that your calculator added the numbers correctly!
		$this->assertEquals(42, $result);
	}
}