<?php
  session_start();
  $email = $_SESSION['user'];


?>

<div class="navbar">
    <ul class="link-group">
        <h3>CRTR</h3>
        <li><a class="link-menu" href="menu.php">Home</a></li>
        <li><a class="link-menu" href="registers.php">Cadastros</a></li>
        <li><a class="link-menu" href="exportDate.php">Relatórios</a></li>
    </ul>

    <ul class="link-group">
        <li><span><?= $email ?></span><a class="link-menu" href="../controllers/logOff.php">Sair</a></li>
    </ul>
</div>
