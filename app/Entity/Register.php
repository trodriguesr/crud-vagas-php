<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Register
{

    public $id;
    public $title;
    public $description;
    public $status;
    public $date;

    public function register()
    {
        $this->date = date('Y-m-d H:i:s');

        $database = new Database('tb_vagas');

        $this->id = $database->insert([
            'titulo'    => $this->title,
            'descricao' => $this->description,
            'ativo'     => $this->status,
            'data'      => $this->date
        ]);

        return true;
    }

    public static function getVagas($where = null, $order = null, $limit = null)
    {
        return (new Database('vagas'))->select($where, $order, $limit);
    }
}
