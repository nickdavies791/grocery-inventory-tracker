<?php

use App\Item;
use App\Store;
use PHPUnit\Framework\TestCase;

class StoreTest extends TestCase
{
	/**
	 * @test
	 */
	public function a_store_can_have_a_name()
	{
		$store = $this->setupStore();
		$store->setName('Test Store');

		$this->assertEquals('Test Store', $store->name());
	}

	/**
	 * @test
	 */
	public function a_store_name_can_be_set()
	{
		$store = $this->setupStore();
		$store->setName('My New Store');

		$this->assertEquals('My New Store', $store->name());
	}

	/*
	 * Set up the store
	 */
	protected function setupStore($name = 'Apple Store')
	{
		return new Store($name);
	}
}
