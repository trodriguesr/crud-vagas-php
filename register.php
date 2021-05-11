<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE','Cadastrar vaga');

use \App\Entity\Vacancies;

$vacancies = new Vacancies;

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {

    $vacancies->title = $_POST['titulo'];
    $vacancies->description = $_POST['descricao'];
    $vacancies->status = $_POST['ativo'];
    $vacancies->register();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
