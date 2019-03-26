<?php

namespace App;

class Item
{
	/*
	 * The item number
	 */
	protected $number;

	/*
	 * The item description
	 */
	protected $description;

	/*
	 * The item quantity
	 */
	protected $quantity;

	/**
	 * Item constructor.
	 * @param $number
	 * @param $description
	 * @param $quantity
	 */
	public function __construct($number, $description, $quantity)
	{
		$this->number = $number;
		$this->description = $description;
		$this->quantity = $quantity;
	}

	/*
	 * Returns the item number
	 */
	public function number()
	{
		return $this->number;
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
}