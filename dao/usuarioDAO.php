<?php

include("Conexao.php");
require_once("../model/Usuario.php");


class usuarioDAO
{
	private $conexao;


	public function __construct()
	{
		$this->conexao = new Conexao();
	}


	public function cadastro(Usuario $usuario)
	{
		$nome = $usuario->getNome();
		$email = $usuario->getEmail();
		$matricula = $usuario->getMatricula();
		$senha = $usuario->getSenha();
		$tipo = $usuario->getTipo();

		$sql =  "INSERT INTO usuario (nome, email, matricula, senha, id_tipo, data_cadastro) VALUES (:nome, :email, :matricula, :senha, :tipo, NOW())";
		$query = $this->conexao->conectar()->prepare($sql);
		$query->bindValue(":nome", $nome);
		$query->bindValue(":email", $email);
		$query->bindValue(":matricula", $matricula);
		$query->bindValue(":senha", $senha);
		$query->bindValue(":tipo", $tipo);
		$query->execute();


		if ($query->rowCount()){
			return 1;
		}
	}


	public function verificar(Usuario $usuario)
	{

		$email = $usuario->getEmail();

		$query = $this->conexao->conectar()->prepare("SELECT * FROM usuario WHERE email = :email");
		$query->bindValue(":email", $email);
		$query->execute();
		$resultado = $query->fetch(PDO::FETCH_ASSOC);

		$retorno = true;

		if(!empty($resultado)){
			return $retorno;
		} else {
			return $retorno = false;
		}

	}
}
?>