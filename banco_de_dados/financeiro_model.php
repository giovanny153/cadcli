<?php 
session_start();
include_once 'conexao.php';

$criterio     = filter_input(INPUT_POST, 'criterio', FILTER_SANITIZE_SPECIAL_CHARS);
// $email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
// $cpf 	  = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

// validar se email já está cadastrado
$tb="financeiro";
$query = "SELECT $criterio, count(*) as number FROM $tb GROUP BY $criterio";  
$result = mysqli_query($link, $query);

$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
		$_SESSION ['msg'] ="<p class='center green-text'>".'Configuração realizada com sucesso!'."<br>";
		header ("Location:../financeiro.php");
	else:		
		$_SESSION['msg'] = "<p class='center red-text'>".'Esta configuração não é possível'."</p>";
		header ("Location:../financeiro.php");	
endif;?>

