<?php

interface PaymentProviderFactoryInterface
{
	public static function createAccounts() : AccountsServiceInterface;
	public static function createEvents() : EventsServiceInterface;
}