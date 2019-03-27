<?php

use App\Item;
use App\Store;
use PHPUnit\Framework\TestCase;

class StoreTest extends TestCase
{
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
	protected function setupStore()
	{
		$store = new Store();
		$store->setName('Apple Store');

		return $store;
	}
}
