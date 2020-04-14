<?php
  include_once('../components/head.php');
  include_once('../components/header.php');

?>

<div class="section">
    <div class="aside">
        <ul class="menu">
            <div class="dropdown">
                <button class="btn-menu">Clínicas</button>
                <div class="dropdown-content">
                    <button id="1">Cadastro</button>
                    <button id="2">Listar</button>
                    <button id="3">Buscar</button>
                </div>

            </div>

            <div class="dropdown">
                <button class="btn-menu">Usuários</button>
                <div class="dropdown-content">
                    <button id="1">Cadastro</button>
                    <button id="2">Listar</button>
                    <button id="3">Buscar</button>
                </div>
            </div>

            <div class="dropdown">
                <button class="btn-menu">Questões</button>
                <div class="dropdown-content">
                    <button id="1">Cadastro</button>
                    <button id="2">Listar</button>
                    <button id="3">Buscar</button>
                </div>

            </div>
        </ul>

    </div>

    <div class="main">
        <h2>Formulário</h2>
    </div>

</div>

<?php
  include_once('../components/footer.php');

?>

<script src="../components/assets/js/dropdown.js"></script>
