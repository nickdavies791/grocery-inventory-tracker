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
		$store = new Store('Test Store');

		$this->assertEquals('Test Store', $store->name());
	}

	/**
	 * @test
	 */
	public function a_store_name_can_be_set()
	{
		$store = new Store('Test Store');
		$store->setName('My New Store');

		$this->assertEquals('My New Store', $store->name());
	}

	/**
	 * @test
	 */
	public function a_store_can_have_an_item()
	{
		$store = new Store('Test Store');
		$store->addItem($this->setupItem());

		$this->assertCount(1, $store->items());
	}

	/**
	 * @test
	 */
	public function a_store_can_have_multiple_items()
	{
		$store = new Store('Test Store');
		$store->addItems([
			$this->setupItem($number = 1),
			$this->setupItem($number = 2),
			$this->setupItem($number = 3)
		]);

		$this->assertCount(3, $store->items());
	}

	/*
	 * Set up the item
	 */
	protected function setupItem($number = 123, $name = 'Garden Furniture', $description = 'Four tables and three chairs', $quantity = 2, $price = 99.99)
	{
		return new Item($number, $name, $description, $quantity, $price);
	}
}
