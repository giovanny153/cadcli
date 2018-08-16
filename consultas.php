<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>  
<div class="row container">
	<div class="col s12">
		<h5 class="light">Consultas</h5><hr>

<!-- INIÍCIO DO CAMPO DE BUSCA -->	

		<!-- <p><form action="<?php?>">
			<div class ="input-field col s12">
		        <i class="material-icons prefix">search</i>		        
			        <input type="text" name="parametro" id="busca"/><label for ="busca">Busca</label>
			        <input type="submit" value="Buscar" class="btn blue">
	      	</div></form>
		</p> -->
		
<!-- INÍCIO DA TABELA COM OS RESULTADOS -->
		<table class="striped" id="busca">
			<thead>
				<tr>
					<th>Fotos</th>
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