<?php

namespace Core;

use PDO;
use PDOException;

class Connection
{
	private $connection;

	public function __construct()
	{
		$connectionString = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
		try {
			$this->connection = new \PDO($connectionString, DB_USER, DB_PASSWORD);
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

			// Establecer charset después de la conexión
			$this->connection->exec("SET NAMES 'utf8'");

		} catch (\PDOException $e) {
			$this->connection = NULL;
			echo "ERROR: " . $e->getMessage();
		}
	}



	public function conect()
	{
		return $this->connection;
	}
}
