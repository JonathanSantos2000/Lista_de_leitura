<?php
$logado = '';
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
  unset($_SESSION['username']);
  unset($_SESSION['password']);
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
    <div class="search-box">
      <input type="text" class="search-txt" name="search-txt" placeholder="pesquisar">
      <a href="#">
        <span class="icone">
          <ion-icon name="search-outline"></ion-icon>
        </span>
      </a>
    </div>
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
                  Manga
                  <span class="icone">
                    <ion-icon name="book-outline"></ion-icon>
                  </span>
                  Manhwa
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
    </ul>
  </div>
</div>