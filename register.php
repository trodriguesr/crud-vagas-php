<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE','Cadastrar vaga');

use \App\Entity\Vacancies;

$vacancies = new Vacancies;

if (isset($_POST['title'], $_POST['description'], $_POST['status'])) {

    $vacancies->title = $_POST['title'];
    $vacancies->description = $_POST['description'];
    $vacancies->status = $_POST['status'];
    $vacancies->register();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
