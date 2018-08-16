<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>  
<div class="row container">
	<div class="col s12">
		<h5 class="light">Consultas</h5><hr>

<!-- INIÍCIO DO CAMPO DE BUSCA -->	

		<!-- <p>
			<div class ="input-field col s12">
		        <i class="material-icons prefix">phone</i>
		        <input type="text" name="busca" id="busca" maxlength="40" >
		        <label for ="busca">Busca</label>
	      	</div>
		</p> -->
		
<!-- INÍCIO DA TABELA COM OS RESULTADOS -->
		<table class="striped">
			<thead>
				<tr>
					<th>Nome</th>
					<!-- <th>CPF</th> -->
					<th>Email</th>
					<th>Telefone</th>
					<th>Última Alteração</th>
				</tr>
			</thead>
			<tbody>
				<?php include_once 'banco_de_dados/read.php';?>
			</tbody>

		</table>
	</div>
</div>

<?php include_once 'includes/footer.inc.php' ?>