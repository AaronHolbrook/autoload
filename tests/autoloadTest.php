<?php

namespace AaronHolbrook\Autoload;

class AutoloadTest extends \PHPUnit_Framework_TestCase {

	public function testFunctionDefined() {

		$this->assertEquals( true, function_exists( 'AaronHolbrook\Autoload\autoload' ) );
	}
}