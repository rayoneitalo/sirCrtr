<?php
  session_start();
  $token = true;

  if($token) {
    header('Location: http://localhost/sirCrtr/views/menu.php');

    $user     = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['user'] = $user;
    $_SESSION['password'] = $password;

  } else {
    echo('Falha');
  }

?>
