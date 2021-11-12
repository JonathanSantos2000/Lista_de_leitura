<?php
include_once('config.php');

$marcados = "SELECT *, (m.lido + m.lendo + m.quero_ler + m.parei) as nMarcado
FROM marcador m 
JOIN acervo a 
on m.idacervo = a.id 
ORDER BY nMarcado DESC
LIMIT 3";

$result_marcados = $conexao->query($marcados);
?>
<div class="livroFavorito">
  <fieldset class="container">
    <legend id="legendLivro">
      <h1 id="titulo"><b>Mais Marcados</b></h1>
    </legend>
    <?php while ($acervo_data = mysqli_fetch_assoc($result_marcados)) { ?>
      <div class="listaLivroFav">
        <div>
           <img class="imgLivroFav" src="<?php echo  $acervo_data['linkImg'] ?>" alt="<?php echo $acervo_data['nomeLivro'] ?>">
        </div>
        <div class="conLivroFav">
          <h1 class="titulo-h1">
            <a href="#"><?php echo $acervo_data['nomeLivro'] ?></a>
          </h1>
          <span class="icone">
            <ion-icon name="add-circle-outline"></ion-icon>
          </span>
          Adicionar
        </div>
      </div>
    <?php } ?>
  </fieldset>
</div>