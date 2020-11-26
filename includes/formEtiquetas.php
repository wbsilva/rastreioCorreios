<?php
//chama o arquivo de configuração com o banco
include_once("conexao.php");

?>

<main>
  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
    <form class="mt-3" method="POST" action="processaEtiqueta.php">
      <label for="nome_destinatario">Nome destinatario:</label>
      <select name="nome_destinatario">
        <option>Selecione...</option>
        <?php
					$result_cat_post = "SELECT * FROM destinatario";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['id_destinatario'].'">'.$row_cat_post['nome'].'</option>';
					}
				?>
      </select><br><br>
      <label>Etiquetas: </label>
			<input type="text" name="etiquetas" placeholder="Digite o numero da etiqueta"><br><br>
      <label>Status: </label>
			<input type="text" name="status" placeholder="Digite o Status"><br><br>
      <label>Data da Consulta: </label>
			<input type="date" name="dtConsulta" value='<?php echo date("Y-m-d"); ?>' disabled=""><br><br>
      <input class="btn btn-success" type="submit" value="Cadastrar">
		</form>
  </section>
</main>
