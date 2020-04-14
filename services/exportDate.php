<?php
  session_start();

  include_once('../components/head.php');
  include_once('../components/header.php');
  include_once("../libs/xlsxwritter.class.php");

  ini_set('display_startup_erros',1);
  error_reporting(E_ALL);
  ini_set('display_errors',1);

  $header = [
    'LOGIN' => 'string',
    'SENHA' => 'string'
  ];


  $user     = $_SESSION['user'];
  $password = $_SESSION['password'];


  $data = [
    $user,
    $password
  ];

  $sheet = 'Dados Pessoais';

  $writer = new XLSXWriter();
  $writer -> writeSheetHeader($sheet, $header);
  $writer -> writeSheetRow($sheet, $data);
  $writer -> writeToFile('../temp/dados.xlsx');

  header("Location: http://localhost/sirCrtr/views/exportDateExit.php");

  ?>





