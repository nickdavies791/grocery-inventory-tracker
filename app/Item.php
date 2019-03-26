<?php

namespace App;

class Item
{
	/*
	 * The item number
	 */
	protected $number;

	/**
	 * Item constructor.
	 * @param $number
	 */
	public function __construct($number)
	{
		$this->number = $number;
	}

	/*
	 * Returns the item number
	 */
	public function number()
	{
		return $this->number;
	}
}