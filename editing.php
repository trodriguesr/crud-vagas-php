<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar vaga');

use \App\Entity\Vacancies;

if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

$vacancies = Vacancies::getVacancy($_GET['id']);

if (!$vacancies instanceof Vacancies) {
    header('location: index.php?status=error');
    exit;
}

if (isset($_POST['title'], $_POST['description'], $_POST['status'])) {

    $vacancies->title = $_POST['title'];
    $vacancies->description = $_POST['description'];
    $vacancies->status = $_POST['status'];
    $vacancies->update();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
