<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database
{

  const HOST = 'mariadb';

  const NAME = 'db_vagas';

  const USER = 'root';

  const PASS = 'senha';

  private $table;

  private $connection;


  public function __construct($table = null)
  {
    $this->table = $table;
    $this->setConnection();
  }

  private function setConnection()
  {
    try {
      $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die('ERROR: ' . $e->getMessage());
    }
  }

  public function execute($query, $params = [])
  {
    try {
      $statement = $this->connection->prepare($query);
      $statement->execute($params);
      return $statement;
    } catch (PDOException $e) {
      die('ERROR: ' . $e->getMessage());
    }
  }

  public function insert($values)
  {
    $fields = array_keys($values);
    $binds = array_pad([], count($fields), '?');

    $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';

    $this->execute($query, array_values($values));

    return $this->connection->lastInsertId();
  }
}
