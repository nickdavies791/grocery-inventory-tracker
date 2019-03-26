<?php

namespace App;

class Item
{
	/*
	 * The item number
	 */
	protected $number;

	/*
	 * The item name
	 */
	protected $name;

	/*
	 * The item description
	 */
	protected $description;

	/*
	 * The item quantity
	 */
	protected $quantity;

	/*
	 * The item price
	 */
	protected $price;

	/**
	 * Item constructor.
	 * @param $number
	 * @param $name
	 * @param $description
	 * @param $quantity
	 * @param $price
	 */
	public function __construct($number, $name, $description, $quantity, $price)
	{
		$this->number = $number;
		$this->name = $name;
		$this->description = $description;
		$this->quantity = $quantity;
		$this->price = $price;
	}

	/*
	 * Returns the item number
	 */
	public function number()
	{
		return $this->number;
	}

	/*
	 * Returns the item name
	 */
	public function name()
	{
		return $this->name;
	}

	/*
	 * Returns the item description
	 */
	public function description()
	{
		return $this->description;
	}

	/*
	 * Returns the item quantity
	 */
	public function quantity()
	{
		return $this->quantity;
	}

	/*
	 * Returns the item price
	 */
	public function price()
	{
		return $this->price;
	}
}