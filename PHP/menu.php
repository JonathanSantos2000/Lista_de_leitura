<?php
$logado = '';
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {

} else {
  $logado = ucfirst($_SESSION['username']);
}
?>

<div class="conteiner_menu">
  <div class="inicio_menu">
    <a class="logo" href="../PHP/index.php">
      <img src="../IMG/logo.png" alt="Logo">
    </a>
  </div>
  <div class="meio_menu">
    <form action="../PHP/pesquisar.php" method="post">
      <div class="search-box">
        <input type="text" class="search-txt" name="search-txt" placeholder="pesquisar">
        <button class="search-icone">
          <span class="icone">
            <ion-icon name="search-outline"></ion-icon>
          </span>
        </button>
      </div>
    </form>
  </div>
  <div class="final_menu">
    <ul class="menu">
      <li>
        <a href="#">
          <span class="icone">
            <ion-icon name="library-outline"></ion-icon>
          </span>
          <span>Biblioteca</span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="../PHP/biblioteca_livro.php">
              <span class="icone">
                <ion-icon name="book-outline"></ion-icon>
              </span>
              Livros
            </a>
          </li>
          <li>
            <a href="#../PHP/biblioteca_novel.php">
              <span class="icone">
                <ion-icon name="book-outline"></ion-icon>
              </span>
              Novels
            </a>
          </li>
          <li>
            <a href="#../PHP/biblioteca_Manga_Manhwa_Manhua.php">
              <span class="icone">
                <ion-icon name="book-outline"></ion-icon>
              </span>
              Manga <br>
              <span class="icone">
                <ion-icon name="book-outline"></ion-icon>
              </span>
              Manhwa<br>
              <span class="icone">
                <ion-icon name="book-outline"></ion-icon>
              </span>
              Manhua
            </a>
          </li>
        </ul>
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
        <li>
          <a href="../PHP/adicionar.php">
            <span class="icone">
              <ion-icon name="add-circle-outline"></ion-icon>
            </span>
            Adicionar
          </a>
        </li>
        <li class="usuario">
          <a href="#">
            <span class="icone">
              <ion-icon name="person-outline"></ion-icon>
            </span>
            <?php echo $logado; ?>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="#">
                <span class="icone">
                  <ion-icon name="library-outline"></ion-icon>
                </span>
                Acervo
              </a>
              <ul class="collection">
                <li>
                  <a href="../PHP/acervo_livros.php">
                    <span class="icone">
                      <ion-icon name="book-outline"></ion-icon>
                    </span>
                    Livros
                  </a>
                </li>
                <li>
                  <a href="../PHP/acervo_novel.php">
                    <span class="icone">
                      <ion-icon name="book-outline"></ion-icon>
                    </span>
                    Novels
                  </a>
                </li>
                <li>
                  <a href="../PHP/acervo_Manga_Manhwa_Manhua.php">
                    <span class="icone">
                      <ion-icon name="book-outline"></ion-icon>
                    </span>
                    Manga <br>
                    <span class="icone">
                      <ion-icon name="book-outline"></ion-icon>
                    </span>
                    Manhwa <br>
                    <span class="icone">
                      <ion-icon name="book-outline"></ion-icon>
                    </span>
                    Manhua
                  </a>
                </li>
              </ul>
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