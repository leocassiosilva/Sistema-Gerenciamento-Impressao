<?php
//require '../dao/Conexao.php';
require_once("../dao/Conexao.php");

$conexao = new Conexao();
if($_GET['acao'] == 'curso'){

	$sql = "SELECT * FROM curso";
	$query = $conexao->conectar()->prepare($sql);
	$query->execute();


	while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
		$retorno[] = array(
			'id_curso'  => $linha['id_curso'],
			'nome'      => $linha['nome'],
		);
	}
}

if($_GET['acao'] == 'turno'){	

	$id_curso = $_GET['id_curso']; 

	$sql = "SELECT turno.id_turno as id_turno, turno.nome as nome 
	FROM turma 
	inner join turno 
	on(turma.id_turno = turno.id_turno)
	WHERE turma.id_curso =  '$id_curso'	
	GROUP BY turno.id_turno";
	$query = $conexao->conectar()->prepare($sql);
	$query->execute();


	while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
		$retorno[] = array(
			'id_turno'  => $linha['id_turno'],
			'nome'      => $linha['nome'],
		);
	}
}
if($_GET['acao'] == 'ano'){	

	$id_curso = $_GET['id_curso']; 
	$id_turno = $_GET['id_turno']; 



	$sql = "SELECT ano.id_ano as id_ano, ano.nome as nome 
	FROM turma 
	inner join turno 
	on(turma.id_turno = turno.id_turno)
	inner join ano 
	on(turma.id_ano = ano.id_ano)
	WHERE turma.id_curso =  '$id_curso'	 and turma.id_turno =  '$id_turno'";

	$query = $conexao->conectar()->prepare($sql);
	$query->execute();


	while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
		$retorno[] = array(
			'id_ano'  => $linha['id_ano'],
			'nome'      => $linha['nome'],
		);
	}
}
echo (json_encode($retorno));
