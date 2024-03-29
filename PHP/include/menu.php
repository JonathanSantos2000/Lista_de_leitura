<?php
$logado = '';

if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
} else {
  $logado = ucfirst($_SESSION['username']);
  $nvusuario = $_SESSION["nvUsuario"];
}
?>

<div class="conteiner_menu">
  <div class="inicio_menu">
    <a class="logo" href="../PHP/index.php">
      <img src="../IMG/logo.png" alt="Logo">
    </a>
  </div>
  <div class="meio_menu">

  </div>
  <div class="final_menu">
    <ul class="menu">
      <li>
        <a href="../PHP/biblioteca.php">
          <span class="icone">
            <ion-icon name="library-outline"></ion-icon>
          </span>
          <span>Biblioteca</span>
        </a>
      </li>
      <?php if ($logado == null) { ?>
        <li>
          <a href="../PHP/registro.php">
            <span class="icone">
              <ion-icon name="log-in-outline"></ion-icon>
            </span>
            <span>Cadastra-se</span>
          </a>
        </li>
        <li>
          <a href="../PHP/login.php">
            <span class="icone">
              <ion-icon name="log-in-outline"></ion-icon>
            </span>
            <span>Login</span>
          </a>
        </li>
      <?php } else { ?>
        <?php if ($nvusuario == 1) { ?>
          <li>
            <a href="../PHP/adicionar.php">
              <span class="icone">
                <ion-icon name="add-circle-outline"></ion-icon>
              </span>
              Adicionar
            </a>
          </li>
        <?php } ?>
        <li class="usuario">
          <a href="#">
            <span class="icone">
              <ion-icon name="person-outline"></ion-icon>
            </span>
            <?php echo $logado; ?>
          </a>
          <ul class="sub-menu">
            <li>
              <a href=" ../PHP/acervo_livros.php">
                <span class="icone">
                  <ion-icon name="library-outline"></ion-icon>
                </span>
                Seus livros
              </a>
            </li>
            <li>
              <a href="../PHP/sair.php">
                <span class="icone">
                  <ion-icon name="log-out-outline"></ion-icon>
                </span>
                Sair
              </a>
            </li>
          </ul>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>