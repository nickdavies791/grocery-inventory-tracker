<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemValidationTest extends TestCase
{
	/**
	 * @test
	 */
	public function an_item_number_must_be_an_integer()
	{
		$this->expectException(\App\Exceptions\InvalidTypeException::class);

		$item = $this->setupItem();
		$item->setNumber('thirty three');
	}

	/**
	 * @test
	 */
	public function an_item_number_must_be_in_range()
	{
		$this->expectException(\App\Exceptions\OutOfRangeException::class);

		$item = $this->setupItem();
		$item->setNumber(1234567890);
	}

	/*
	 * Set up the item
	 */
	protected function setupItem($number = 123, $name = 'Garden Furniture', $description = 'Four tables and three chairs', $quantity = 2, $price = 99.99)
	{
		return new Item($number, $name, $description, $quantity, $price);
	}
}