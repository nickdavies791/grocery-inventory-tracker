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

	/**
	 * @test
	 */
	public function an_item_name_must_be_a_string()
	{
		$this->expectException(\App\Exceptions\InvalidTypeException::class);

		$item = $this->setupItem();
		$item->setName(false);
	}

	/**
	 * @test
	 */
	public function an_item_name_must_be_no_more_than_30_characters_long()
	{
		$this->expectException(\App\Exceptions\InvalidLengthException::class);

		$item = $this->setupItem();
		$item->setName('Wonderfully long and interesting item name');
	}

	/**
	 * @test
	 */
	public function an_item_description_must_be_a_string()
	{
		$this->expectException(\App\Exceptions\InvalidTypeException::class);

		$item = $this->setupItem();
		$item->setDescription(false);
	}

	/**
	 * @test
	 */
	public function an_item_description_must_be_at_least_30_characters_long()
	{
		$this->expectException(\App\Exceptions\InvalidLengthException::class);

		$item = $this->setupItem();
		$item->setDescription('A tiny description');
	}

	/*
	 * Set up the item
	 */
	protected function setupItem($number = 123, $name = 'Garden Furniture', $description = 'Four tables and three chairs', $quantity = 2, $price = 99.99)
	{
		return new Item($number, $name, $description, $quantity, $price);
	}
}