<?php

namespace App;

use App\Exceptions\InvalidLengthException;
use App\Exceptions\InvalidTypeException;
use App\Exceptions\OutOfRangeException;

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
	 * Sets the item number
	 */
	public function setNumber($number)
	{
		if (!is_int($number)) {
			throw new InvalidTypeException($number);
		}

		if ($number <= 0 || $number >= 99999) {
			throw new OutOfRangeException($number);
		}

		return $this->number = $number;
	}
	/*
	 * Returns the item name
	 */
	public function name()
	{
		return $this->name;
	}

	/*
	 * Sets the item name
	 */
	public function setName($name)
	{
		if (!is_string($name)) {
			throw new InvalidTypeException($name);
		}

		if (strlen($name) > 30) {
			throw new InvalidLengthException($name);
		}

		return $this->name = $name;
	}

	/*
	 * Returns the item description
	 */
	public function description()
	{
		return $this->description;
	}

	/*
	 * Sets the description
	 */
	public function setDescription($description)
	{
		if (!is_string($description)) {
			throw new InvalidTypeException($description);
		}

		if (strlen($description) < 30) {
			throw new InvalidLengthException($description);
		}

		return $this->description = $description;
	}

	/*
	 * Returns the item quantity
	 */
	public function quantity()
	{
		return $this->quantity;
	}

	/*
	 * Sets the item quantity
	 */
	public function setQuantity($quantity)
	{
		if (!is_int($quantity)) {
			throw new InvalidTypeException($quantity);
		}

		if ($quantity < 0 || $quantity > 999) {
			throw new OutOfRangeException($quantity);
		}

		return $this->quantity = $quantity;
	}

	/*
	 * Returns the item price
	 */
	public function price()
	{
		return $this->price;
	}

	/*
	 * Sets the item price
	 */
	public function setPrice($price)
	{
		return $this->price = $price;
	}
}