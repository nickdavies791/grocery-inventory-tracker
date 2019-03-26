<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
	/**
	 * @test
	 */
	public function an_item_can_have_an_item_number()
	{
		$item = $this->setupItem($number = '123456');

		$this->assertEquals('123456', $item->number());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_description()
	{
		$item = $this->setupItem($description = 'Four tables and three chairs');

		$this->assertEquals('Four tables and three chairs', $item->description());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_quantity()
	{
		$item = $this->setupItem($quantity = 15);

		$this->assertEquals(15, $item->quantity());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_price()
	{
		$item = $this->setupItem($price = 99.99);

		$this->assertEquals(99.99, $item->price());
	}

	/*
	 * Set up the item
	 */
	protected function setupItem($number = 123, $name = 'Item', $description = 'A nice item description', $quantity = 2, $price = 12.50)
	{
		return new Item($number, $name, $description, $quantity, $price);
	}
}