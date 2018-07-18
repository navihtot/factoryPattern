<?php

/*
 * Abstract factory example
 */

class MangopayFactory implements PaymentProviderFactoryInterface
{

	public static function createAccounts(): AccountsServiceInterface
	{
		return AccountsServiceFactory::create('mangopay');
	}

	public static function createEvents(): EventsServiceInterface
	{
		// TODO: Implement createEvents() method.
	}
}