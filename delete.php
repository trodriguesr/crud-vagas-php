<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vacancies;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

$vacancies = Vacancies::getVacancies($_GET['id']);

if(!$vacancies instanceof Vacancies){
  header('location: index.php?status=error');
  exit;
}

if(isset($_POST['excluir'])){

  $vacancies->delete();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirm-delete.php';
include __DIR__.'/includes/footer.php';