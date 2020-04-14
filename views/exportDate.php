<?php
  include_once('../components/head.php');
  include_once('../components/header.php');

?>

<form action="../services/exportDate.php" method="post">
    <button class="link-confirm" onclick="init()">Exportar Dados</button>
</form>


<?php
  include_once('../components/footer.php');

?>

<script>
function init() {
    alert('Os dados serão exportados');
}
</script>
