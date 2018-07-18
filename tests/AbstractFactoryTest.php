<?php

use PHPUnit\Framework\TestCase;


class AbstractFactoryTest extends TestCase
{
	public function test_abstractFactory() {

		$factory = new MangopayFactory();
		$factory->createAccounts()->add([]);
		$this->assertEquals('mangopay', $factory->createAccounts()->add([]));
	}
}