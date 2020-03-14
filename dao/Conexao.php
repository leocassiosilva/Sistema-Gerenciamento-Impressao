<?php
//CRIANDO A CLASSE DE CONEXAO
class Conexao{
	//ATRIBUTO PRIVADOS
	private $usuario = "root";
	private $senha= "";
	private $banco= "printif";
	private $servidor = "localhost";
	private static $conexao;
	//CONSTRUTOR
	public function __construct(){}
	//METODO PARA CONECTAR
	public function conectar(){
		try{
			if(is_null(self::$conexao)){
				self::$conexao = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
			}
			return self::$conexao;
		}catch(PDOException $e){
			echo 'Error: '.$e->getMessage();
		}
	}
}
?>