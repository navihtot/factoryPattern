<?php

namespace Mangopay;
use AccountsServiceInterface;

class Accounts implements AccountsServiceInterface
{

	public function __construct($config)
	{
		// TODO: here do something with config
	}

	public function add($data)
	{
		return 'mangopay';
	}

	public function update($id, $data)
	{
		// TODO: Implement update() method.
	}

	public function delete($id)
	{
		// TODO: Implement delete() method.
	}

	public function get($id)
	{
		// TODO: Implement get() method.
	}
}