<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
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
	public function an_item_name_can_be_set()
	{
		$item = $this->setupItem();
		$item->setName('MacBook Pro');

		$this->assertEquals('MacBook Pro', $item->name());
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
	public function an_item_quantity_can_be_set()
	{
		$item = $this->setupItem();
		$item->setQuantity(45);

		$this->assertEquals(45, $item->quantity());
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

	/**
	 * @test
	 */
	public function an_item_price_must_be_saved_in_pence()
	{
		$item = $this->setupItem();
		$item->setPrice(12.75);

		$this->assertEquals(1275, $item->priceInPence());
	}

	/**
	 * @test
	 */
	public function an_item_price_in_pence_must_be_an_integer()
	{
		$item = $this->setupItem();
		$item->setPrice(850.35);

		$this->assertIsInt($item->priceInPence());
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
}