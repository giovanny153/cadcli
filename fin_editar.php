<?php 
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
	<div class="col s12">
		<h5 class="light">Edição de Registros</h5><hr>	
	</div>
</div>


<?php 
	include_once 'banco_de_dados/conexao.php';
	$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
	$tb = 'fin_mov';
	$_SESSION['id'] = $id;
	$querySelect = $link->query("select * from $tb where id='$id'");

	while($registros = $querySelect->fetch_assoc()):
		$id = $registros['id'];
		$valor     = $registros['valor'];
		$descricao = $registros['descricao'];
		$data 	   = $registros['data'];
		$categoria = $registros['categoria'];
		$conta 	   = $registros['conta'];
	endwhile
?>

<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/fin_cad_model.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/money.png" alt="(imagem)" width="100"></legend>
      <h5 class="light center">Lançamento Financeiro</h5>

      <!-- Exibir mensagem sobre cadastro não realizado por erro -->
      <?php
        if(isset($_SESSION['msg'])):
          echo $_SESSION['msg'];
          session_unset();
        endif
      ?>

 
    <!-- CAMPO NOME -->  
      <div class ="input-field col s12">
        <i class="material-icons prefix">money_gram</i>
        <input type="text" name="valor" id="valor" maxlength="40" value="<?php echo $valor ?>" autofocus>
        <label for ="valor">Valor</label>
      </div>

      <div class ="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="descricao" id="descricao" maxlength="40" value="<?php echo $descricao ?>" autofocus>
        <label for ="descricao">Descrição</label>
      </div>

      <div class ="input-field col s12">
        <i class="material-icons prefix">date_range</i>
        <input type="text" name="data" id="data" maxlength="40" value="<?php echo $data ?>" autofocus>
        <label for ="data">Data</label>
      </div>

      <div class ="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="categoria" id="categoria" maxlength="40" value="<?php echo $categoria ?>" autofocus>
        <label for ="categoria">Categoria</label>
      </div>

      <div class ="input-field col s12">
        <i class="material-icons prefix">credit_card</i>
        <input type="text" name="conta" id="conta" maxlength="40"  value="<?php echo $conta ?>" autofocus>
        <label for ="conta">Conta</label>
      </div>

      <!-- BOTÕES -->
      <div class="input-field col s12">
        <input type="submit" value="Cadastrar" class="btn blue">
        <!-- <input type="submit" value="Limpar" class="btn red"> -->
      </div>


    </fieldset>
  </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>