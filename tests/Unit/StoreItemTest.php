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
			$this->setupItem(),
			$this->setupItem(),
			$this->setupItem()
		]);

		$this->assertCount(3, $store->items());
	}

	/*
	 * Set up the item
	 */
	protected function setupItem()
	{
		$item = new Item();
		$item->setNumber(rand(1, 99999));
		$item->setName('Garden Furniture');
		$item->setDescription('Four tables and twenty six chairs');
		$item->setQuantity(rand(0, 999));
		$item->setPrice(99.99);

		return $item;
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
