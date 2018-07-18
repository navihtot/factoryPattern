<?php

interface AccountsServiceInterface
{
	public function __construct($config);
	public function add($data);
	public function update($id, $data);
	public function delete($id);
	public function get($id);
}