<?php

use PHPUnit\Framework\TestCase;


class FactoryTest extends TestCase
{
	public function test_accountsServiceFactory() {

		$accounts = AccountsServiceFactory::create('mangopay');
		$this->assertInstanceOf(Mangopay\Accounts::class, $accounts);
		$this->assertEquals('mangopay', $accounts->add([]));

		$accounts = AccountsServiceFactory::create('stripe');
		$this->assertInstanceOf(Stripe\Accounts::class, $accounts);
		$this->assertEquals('stripe', $accounts->add([]));
	}
}