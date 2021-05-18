<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Vacancies
{

  public $id;
  public $title;
  public $description;
  public $status;
  public $date;

  public function register()
  {
    $this->date = date('Y-m-d H:i:s');

    $database = new Database('tb_vacancies');

    $this->id = $database->insert([
      'title'    => $this->title,
      'description' => $this->description,
      'status'     => $this->status,
      'date'      => $this->date
    ]);

    return true;
  }

  public function update()
  {
    return (new Database('tb_vacancies'))->update('id = ' . $this->id, [
      'title'    => $this->title,
      'description' => $this->description,
      'status'     => $this->status,
      'date'      => $this->date
    ]);
  }

  public function delete()
  {
    return (new Database('tb_vacancies'))->delete('id = ' . $this->id);
  }

  public static function getVacancies($where = null, $order = null, $limit = null)
  {
    return (new Database('tb_vacancies'))->select($where, $order, $limit)
      ->fetchAll(PDO::FETCH_CLASS, self::class);
  }

  public static function getVacancy($id)
  {
    return (new Database('tb_vacancies'))->select('id = ' . $id)
      ->fetchObject(self::class);
  }
}
