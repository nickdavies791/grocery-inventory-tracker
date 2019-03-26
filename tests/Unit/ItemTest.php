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
		$item = new Item('123456', 'Garden Furniture');

		$this->assertEquals('123456', $item->number());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_description()
	{
		$item = new Item('123456', 'Garden Furniture');

		$this->assertEquals('Garden Furniture', $item->description());
	}
}