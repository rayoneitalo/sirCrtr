<?php
  include_once('../components/head.php');

?>

<form action="../controllers/login.php" class="form-group" method="POST">
    <label for="user">Login</label>
    <input type="email" class="form-control" placeholder="Seu e-mail" name="email" id="user" required>

    <label for="password">Senha</label>
    <input type="password" class="form-control" placeholder="Sua senha" name="password" id="password" required>

    <button class="btn-primary">Entrar</button>
    <a href="#">Esqueci minha senha!</a>
</form>

<?php
  include_once('../components/footer.php');

?>
