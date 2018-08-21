<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>  
<div class="row container">
	<div class="col s6">
		<h5 class="light">Financeiro</h5><hr>

		<div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <select name='conta'>          
          <option value="" disabled selected></option>
          <option value="Santander">Santander</option>
          <option value="Bradesco">Bradesco</option>
          <option value="Itaú">Itaú</option>
        </select>
        <label>Conta</label>
      </div>

      <!-- <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <select name='conta'>          
          <option value="" disabled selected></option>
          <option value="Santander">Santander</option>
          <option value="Bradesco">Bradesco</option>
          <option value="Itaú">Itaú</option>
        </select>
        <label>Categoria</label>
      </div> -->



  </div>

<!-- INÍCIO DA TABELA COM OS RESULTADOS -->
		<table class="striped" id="busca">
			<thead>
				<tr>
					<th>Data</th>
					<th>Valor</th>
					<th>Descricao</th>
					<th>Categoria</th>
					<th>Conta</th>
					<th>Timestamp</th>
				</tr>
			</thead>
			<tbody>
				<?php include_once 'banco_de_dados/fin_read.php';?>
			</tbody>

		</table>
	</div>
</div>

<?php include_once 'includes/footer.inc.php' ?>
