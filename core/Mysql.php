<?php

namespace Core;

use PDO;
use Core\Connection;

class Mysql extends Connection
{
	private $connection;
	private $strquery;
	private $arrValues;

	function __construct()
	{
		$this->connection = new Connection();
		$this->connection = $this->connection->conect();

		if ($this->connection === null) {
			throw new \Exception('Failed to connect to the database.');
		}
	}

	//Insertar un registro
	// public function insert(string $query, array $arrValues)
	// {
	// 	$this->strquery = $query;
	// 	$this->arrValues = $arrValues;
	// 	if ($this->connection !== null) {
	// 		$insert = $this->connection->prepare($this->strquery);
	// 		$resInsert = $insert->execute($this->arrValues);
	// 	} else {
	// 		throw new \Exception(getErrorMessage('db_null'));
	// 	}
	// 	if ($resInsert) {
	// 		$lastInsert = $this->connection->lastInsertId();
	// 	} else {
	// 		$lastInsert = 0;
	// 	}
	// 	return $lastInsert;
	// }
	// //Busca un registro
	// public function select(string $query)
	// {
	// 	$this->strquery = $query;
	// 	if ($this->connection !== null) {
	// 		if ($this->connection !== null) {
	// 			$result = $this->connection->prepare($this->strquery);
	// 		} else {
	// 			throw new \Exception(getErrorMessage('db_null'));
	// 		}
	// 		$result->execute();
	// 		$data = $result->fetch(\PDO::FETCH_ASSOC);
	// 		return $data;
	// 	} else {
	// 		throw new \Exception(getErrorMessage('db_null'));
	// 	}
	// }
	//Devuelve todos los registros
	public function select_all(string $query)
	{
		$this->strquery = $query;

		if ($this->connection !== null) {
			$result = $this->connection->prepare($this->strquery);
			$result->execute();
			$data = $result->fetchall(\PDO::FETCH_ASSOC);
			return $data;
		} else {
			throw new \Exception(getErrorMessage('db_null'));
		}
	}
	// //Actualiza registros
	// public function update(string $query, array $arrValues)
	// {
	// 	$this->strquery = $query;
	// 	$this->arrValues = $arrValues;
	// 	if ($this->connection !== null) {
	// 		$update = $this->connection->prepare($this->strquery);
	// 		$resExecute = $update->execute($this->arrValues);
	// 	} else {
	// 		throw new \Exception(getErrorMessage('db_null'));
	// 	}
	// 	return $resExecute;
	// }
	// //Eliminar un registros
	// public function delete(string $query)
	// {
	// 	$this->strquery = $query;
	// 	if ($this->connection !== null) {
	// 		$result = $this->connection->prepare($this->strquery);
	// 		$del = $result->execute();
	// 		return $del;
	// 	} else {
	// 		throw new \Exception(getErrorMessage('db_null'));
	// 	}
	// }
}
