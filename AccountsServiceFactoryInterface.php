<?php

interface AccountsServiceFactoryInterface
{
	public static function create($provider) : AccountsServiceInterface;
}