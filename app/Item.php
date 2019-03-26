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

	/**
	 * Item constructor.
	 * @param $number
	 * @param $description
	 */
	public function __construct($number, $description)
	{
		$this->number = $number;
		$this->description = $description;
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
}