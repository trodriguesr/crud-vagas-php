<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar vaga');

use \App\Entity\Vacancies;

if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

$vacancies = Vacancies::getVacancies($_GET['id']);

if (!$vacancies instanceof Vacancies) {
    header('location: index.php?status=error');
    exit;
}

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {

    $vacancies->title    = $_POST['titulo'];
    $vacancies->description = $_POST['descricao'];
    $vacancies->status    = $_POST['ativo'];
    $vacancies->update();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
