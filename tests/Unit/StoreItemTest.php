<?php

use App\Item;
use App\Store;
use PHPUnit\Framework\TestCase;

class StoreItemTest extends TestCase
{
	/**
	 * @test
	 */
	public function a_store_can_have_an_item()
	{
		$store = $this->setupStore();
		$store->addItem($this->setupItem());

		$this->assertCount(1, $store->items());
	}

	/**
	 * @test
	 */
	public function a_store_can_have_multiple_items()
	{
		$store = $this->setupStore();
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

	/*
	 * Set up the store
	 */
	protected function setupStore($name = 'Apple Store')
	{
		return new Store($name);
	}
}
