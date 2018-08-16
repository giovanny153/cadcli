<?php 

include_once 'conexao.php';
$querySelect = $link->query("select * from tb_clientes");
while($registros = $querySelect->fetch_assoc()):
	$id = $registros['COD'];
	$nome = $registros['nome'];
	$email  =$registros['email'];
	$telefone  =$registros['telefone'];
	$cpf  =$registros['cpf'];

	echo "<tr>";
	echo "
	<td>$nome</td>
	<td>$cpf</td>
	<td>$email</td>
	<td>$telefone</td>
	<td>
		<a href='banco_de_dados/update.php?id=$id'>
		<i class='material-icons'>edit</i>
	</td>
	<td>
		<a href='banco_de_dados/update.php?id=$id'>
		<i class='material-icons'>delete</i>
	</td>";
	echo "</tr>";
endwhile;