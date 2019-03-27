<?php

namespace App\Validation;

use App\Exceptions\InvalidLengthException;
use App\Exceptions\InvalidTypeException;

class StoreValidation
{
	/**
	 * Validate the store name
	 *
	 * @param $name
	 * @return mixed
	 * @throws InvalidLengthException
	 * @throws InvalidTypeException
	 */
	public function validateName($name)
	{
		if (!is_string($name)) {
			throw new InvalidTypeException('The given value was not a string.');
		}

		if (strlen($name) > 20) {
			throw new InvalidLengthException('The given value was greater than 20 characters.');
		}

		return $name;
	}
}