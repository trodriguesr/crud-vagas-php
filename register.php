<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Register;

$register = new Register;

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {

    $register->title = $_POST['titulo'];
    $register->description = $_POST['descricao'];
    $register->status = $_POST['ativo'];
    $register->register();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
