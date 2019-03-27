<?php

namespace App\Validation;


use App\Exceptions\InvalidLengthException;
use App\Exceptions\InvalidTypeException;
use App\Exceptions\OutOfRangeException;

class ItemValidation
{
	/**
	 * Validate the item number
	 *
	 * @param $number
	 * @return mixed
	 * @throws InvalidTypeException
	 * @throws OutOfRangeException
	 */
	public function validateNumber($number)
	{
		if (!is_int($number)) {
			throw new InvalidTypeException($number);
		}

		if ($number <= 0 || $number >= 99999) {
			throw new OutOfRangeException($number);
		}

		return $number;
	}

	/**
	 * Validate the item name
	 *
	 * @param $name
	 * @return mixed
	 * @throws InvalidLengthException
	 * @throws InvalidTypeException
	 */
	public function validateName($name)
	{
		if (!is_string($name)) {
			throw new InvalidTypeException($name);
		}

		if (strlen($name) > 30) {
			throw new InvalidLengthException($name);
		}

		return $name;
	}

	/**
	 * Validate the item description
	 *
	 * @param $description
	 * @return mixed
	 * @throws InvalidLengthException
	 * @throws InvalidTypeException
	 */
	public function validateDescription($description)
	{
		if (!is_string($description)) {
			throw new InvalidTypeException($description);
		}

		if (strlen($description) < 30) {
			throw new InvalidLengthException($description);
		}

		return $description;
	}

	/**
	 * Validate the item quantity
	 *
	 * @param $quantity
	 * @return mixed
	 * @throws InvalidTypeException
	 * @throws OutOfRangeException
	 */
	public function validateQuantity($quantity)
	{
		if (!is_int($quantity)) {
			throw new InvalidTypeException($quantity);
		}

		if ($quantity < 0 || $quantity > 999) {
			throw new OutOfRangeException($quantity);
		}

		return $quantity;
	}

	/**
	 * Validate the item price
	 *
	 * @param $price
	 * @return mixed
	 * @throws InvalidTypeException
	 */
	public function validatePrice($price)
	{
		if (!is_double($price)) {
			throw new InvalidTypeException($price);
		}

		return $price;
	}
}