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
		$item = $this->setupItem();

		$this->assertEquals(123, $item->number());
	}

	/**
	 * @test
	 */
	public function an_item_number_can_be_set()
	{
		$item = $this->setupItem();
		$item->setNumber(321);

		$this->assertEquals(321, $item->number());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_name()
	{
		$item = $this->setupItem();

		$this->assertEquals('Garden Furniture', $item->name());
	}

	/**
	 * @test
	 */
	public function an_item_name_can_be_set()
	{
		$item = $this->setupItem();
		$item->setName('MacBook Pro');

		$this->assertEquals('MacBook Pro', $item->name());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_description()
	{
		$item = $this->setupItem();

		$this->assertEquals('Four tables and three chairs', $item->description());
	}

	/**
	 * @test
	 */
	public function an_item_description_can_be_set()
	{
		$item = $this->setupItem();
		$item->setDescription('LED-backlit widescreen display');

		$this->assertEquals('LED-backlit widescreen display', $item->description());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_quantity()
	{
		$item = $this->setupItem();

		$this->assertEquals(2, $item->quantity());
	}

	/**
	 * @test
	 */
	public function an_item_quantity_can_be_set()
	{
		$item = $this->setupItem();
		$item->setQuantity(45);

		$this->assertEquals(45, $item->quantity());
	}

	/**
	 * @test
	 */
	public function an_item_can_have_a_price()
	{
		$item = $this->setupItem();

		$this->assertEquals(99.99, $item->price());
	}

	/**
	 * @test
	 */
	public function an_item_price_can_be_set()
	{
		$item = $this->setupItem();
		$item->setPrice(72.50);

		$this->assertEquals(72.50, $item->price());
	}

	/*
	 * Set up the item
	 */
	protected function setupItem($number = 123, $name = 'Garden Furniture', $description = 'Four tables and three chairs', $quantity = 2, $price = 99.99)
	{
		return new Item($number, $name, $description, $quantity, $price);
	}
}