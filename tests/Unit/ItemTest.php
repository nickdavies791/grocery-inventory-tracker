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
		$item = new Item('123456', 'Garden Furniture', 15, 99.99);

		$this->assertEquals('123456', $item->number());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_description()
	{
		$item = new Item('123456', 'Garden Furniture', 15, 99.99);

		$this->assertEquals('Garden Furniture', $item->description());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_quantity()
	{
		$item = new Item('123456', 'Garden Furniture', 15, 99.99);

		$this->assertEquals(15, $item->quantity());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_price()
	{
		$item = new Item('123456', 'Garden Furniture', 15, 99.99);

		$this->assertEquals(99.99, $item->price());
	}
}