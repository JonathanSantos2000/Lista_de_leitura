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
<div class="Works">
  <fieldset class="container">
    <legend id="legendLivro">
      <h1 id="titulo"><b>Mais Marcados</b></h1>
    </legend>
    <div class="boxML">
      <?php while ($acervo_data = mysqli_fetch_assoc($result_marcados)) { ?>
        <div class="card">
          <div class="imagem">
            <img class="imgLivroFav" src="<?php echo  $acervo_data['linkImg'] ?>" alt="<?php echo $acervo_data['nomeLivro'] ?>">
          </div>
          <div class="texto">
            <div class="pra">
              <h5><?php echo $acervo_data['nomeLivro'] ?></h5>
              <p style="text-align: center;">
                <a class="button" href="#">
                  <span class="iconeAdd">
                    <ion-icon name="add-circle-outline"></ion-icon>
                  </span>Adicionar
                </a>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
  </fieldset>
</div>