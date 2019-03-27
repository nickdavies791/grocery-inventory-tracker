<?php

namespace App;

use App\Validation\ItemValidation;

class Item
{
	use ItemValidation;

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
		$this->validateNumber($number);

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
		$this->validateName($name);

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
		$this->validateDescription($description);

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
		$this->validateQuantity($quantity);

		return $this->quantity = $quantity;
	}

	/*
	 * Returns the item price
	 */
	public function price()
	{
		return $this->priceInPounds();
	}

	/*
	 * Sets the item price
	 */
	public function setPrice($price)
	{
		$this->validatePrice($price);

		return $this->price = (int) $this->setPriceInPence($price);
	}

	/*
	 * Returns the price in pence
	 */
	public function priceInPence()
	{
		return $this->price;
	}

	/*
	 * Sets the price in pence
	 */
	protected function setPriceInPence($price)
	{
		return $price * 100;
	}

	/*
	 * Returns the price in pounds
	 */
	protected function priceInPounds()
	{
		return $this->price / 100;
	}

	/*
	 * Sets the price in pounds
	 */
	protected function setPriceInPounds($price)
	{
		return $price / 100;
	}
}