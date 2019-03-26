<?php

namespace App;

class Store
{
	/*
	 * The store name
	 */
	protected $name;

	/*
	 * The store items
	 */
	protected $items = [];

	/**
	 * Store constructor.
	 * @param $name
	 */
	public function __construct($name)
	{
		$this->name = $name;
	}

	/**
	 * Returns the store name
	 */
	public function name()
	{
		return $this->name;
	}

	/*
	 * Sets the store name
	 */
	public function setName($name)
	{
		return $this->name = $name;
	}

	/*
	 * Stores multiple items in the array
	 */
	public function addItems(array $items)
	{
		foreach ($items as $item) {
			$this->addItem($item);
		}
	}

	/*
	 * Stores a new item in the array
	 */
	public function addItem($item)
	{
		return $this->items[] = $item;
	}

	/*
	 * Returns the store items
	 */
	public function items()
	{
		return $this->items;
	}
}