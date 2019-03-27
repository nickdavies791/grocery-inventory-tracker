<?php

use App\Store;
use PHPUnit\Framework\TestCase;

class StoreValidationTest extends TestCase
{
	/**
	 * @test
	 */
	public function a_store_name_must_be_a_string()
	{
		$this->expectException(\App\Exceptions\InvalidTypeException::class);

		$store = $this->setupStore();
		$store->setName(1902);
	}

	/**
	 * @test
	 */
	public function a_store_name_must_be_no_longer_than_20_characters()
	{
		$this->expectException(\App\Exceptions\InvalidLengthException::class);

		$store = $this->setupStore();
		$store->setName('My very interesting, wonderfully long store name');
	}

	/*
	 * Set up the store
	 */
	protected function setupStore($name = 'Apple Store')
	{
		return new Store($name);
	}
}
