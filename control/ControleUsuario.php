<?php

//include("Conexao.php");
require_once("../model/Usuario.php");
require_once("../dao/usuarioDAO.php");

$usuarioDAO = new usuarioDAO();

$usuario = new Usuario(); 

$nome = $_POST["nome"];
$email = $_POST["email"];
$matricula = $_POST["matricula"];
$senha = $_POST["senha"];
$tipo = $_POST["tipo"];

$retorno = false;

//Verificar o nome
if (empty($nome)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu nome!');
	echo json_encode($retorno);
	exit();
}

//Verificar o email
if (empty($email)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu e-mail!');
	echo json_encode($retorno);
	exit();
}

//Inicio da verificação do email
$op = true; 
if ($tipo == 1) {

	$array = explode('@',  $email);
	$result = explode('.', $array[1]);

	if (!($result[0] == "ifrn" && $result[1] == "edu" && $result[2] == "br")) {
		$op = false; 
	} 
}


if ($op == false) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Email invalido!');
	echo json_encode($retorno);
	exit();
}

//Verificar o email
if (empty($matricula)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha sua matricula!');
	echo json_encode($retorno);
	exit();
}

//Verificar o senha
if (empty($senha)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha sua senha!');
	echo json_encode($retorno);
	exit();
}

/*Usuario*/
$usuario->setNome($nome);
$usuario->setEmail($email);
$usuario->setMatricula($matricula);
$usuario->setSenha($senha);
$usuario->setTipo($tipo);

$verificarEmail = $usuarioDAO->verificar($usuario); 

if (!empty($verificarEmail)) {
	$retorno = array('codigo' => 0, 'mensagem' => ' E-mail já existe!');
	echo json_encode($retorno);
	exit();
}

$resultado = $usuarioDAO->cadastro($usuario);

if (!empty($resultado)) {
	$retorno = array('codigo' => 1, 'mensagem' => 'Cadastrado!');
	echo json_encode($retorno);
	exit();
}

















?>