<?php
  session_start();
  include_once('../components/head.php');
  include_once('../components/header.php');

  if($_SESSION['user'] == 'italo@gmail.com') {
    $user = 'Bem vindo Italo Rayone!';
  } else {
    $user = 'Usuário desconhecido';
  }

?>

<h4><?= $user ?></h4>

<?php
  include_once('../components/footer.php');
