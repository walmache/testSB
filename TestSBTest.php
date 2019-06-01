<?php

use PHPUnit\Framework\TestCase;
require "TestSB.php";

final class TestSBTest extends TestCase{
	
	public Function testMelodies(){

		$melodie = new TestSB();

		$this->assertEquals("fiu,cric-cric,brrah", $melodie->getMelodie('brr'));

		$this->assertEquals("birip,trri-trri,croac", $melodie->getMelodie('pep'));

		$this->assertEquals("plop,cric-cric,brrah", $melodie->getMelodie('bri-bri'));

		$this->assertEquals("cric-cric,brrah", $melodie->getMelodie('plop'));

		$this->assertEquals("cric-cric,brrah", $melodie->getMelodie('cric-cric'));

	}
}

?>