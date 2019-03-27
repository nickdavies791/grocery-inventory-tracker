<?php

class Database
{
	/*
	 * The database source name
	 */
	private $type;

	/*
	 * The database host name
	 */
	private $hostname;

	/*
	 * The database username
	 */
	private $username;

	/*
	 * The database password
	 */
	private $password;

	/*
	 * The database name
	 */
	private $database;

	/*
	 * The database handler
	 */
	protected $link;

	/*
	 * The query statement
	 */
	private $stmt;

	/**
	 * Database constructor.
	 * @param $type
	 * @param $hostname
	 * @param $username
	 * @param $password
	 * @param $database
	 */
	public function __construct($type, $hostname, $username, $password, $database)
	{
		$this->type = $type;
		$this->hostname = $hostname;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->connect();
	}

	/**
	 * Return the PDO connection instance
	 */
	private function connect()
	{
		$this->link = new PDO($this->dsn, $this->username, $this->password, $this->database);
	}

	/*
	 * Prepare the query statement
	 */
	public function query($query)
	{
		$this->stmt = $this->link->prepare($query);
	}

	/*
	 * Bind values to placeholders
	 */
	public function bind($param, $value, $type = null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value) :
					$type = PDO::PARAM_NULL;
					break;
				default:
				$type = PDO::PARAM_STR;
			}
		}

		$this->stmt->bindValue($param, $value, $type);
	}

	/*
	 * Execute the statement
	 */
	public function execute()
	{
		return $this->stmt->execute();
	}

	/*
	 * Return result set rows
	 */
	public function resultSet()
	{
		$this->execute();

		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	/*
	 * Return a single result
	 */
	public function single()
	{
		$this->execute();

		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	/*
	 * Return the number of rows
	 */
	public function rowCount()
	{
		return $this->stmt->rowCount();
	}

	/*
	 * Return the last inserted ID
	 */
	public function lastInsertId()
	{
		return $this->link->lastInsertId();
	}
}