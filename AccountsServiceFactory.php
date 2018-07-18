<?php

/*
 * Abstract factory example
 */

use Mangopay\Accounts as MangopayAccounts;
use Stripe\Accounts as StripeAccounts;

class AccountsServiceFactory implements AccountsServiceFactoryInterface
{

	private static $providerMapping = [
		'stripe' => StripeAccounts::class,
		'mangopay' => MangopayAccounts::class,
	];

	/**
	 * Factory method
	 *
	 * @param $provider
	 * @return AccountsServiceInterface
	 * @throws Exception
	 */
	public static function create($provider) : AccountsServiceInterface
	{
		$provider = strtolower($provider);

		// in real life we would load config from file depending on the provider
		$config = [
			'param1' => 'something',
			'param2' => 'other'
		];

		if (!isset(self::$providerMapping[$provider])) {
			throw new Exception("Payment provider not implemented.");
		}

		if (!class_exists(self::$providerMapping[$provider])) {
			throw new Exception("Cannot find provider class.");
		}

		return new self::$providerMapping[$provider]($config);
	}
}