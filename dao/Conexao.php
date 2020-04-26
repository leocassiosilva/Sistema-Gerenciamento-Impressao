<?php
//CRIANDO A CLASSE DE CONEXAO
class Conexao{
	//ATRIBUTO PRIVADOS
	private $usuario = "postgres";
	private $senha= "1234";
	private $banco= "printif";
	private $servidor = "localhost";
	private static $conexao;
    private $porta = 5432;


	//CONSTRUTOR
	public function __construct(){}
	//METODO PARA CONECTAR
	public function conectar(){
		try{
			if(is_null(self::$conexao)){
				self::$conexao = new PDO("pgsql:host=".$this->servidor.";port=".$this->porta.";   dbname=".$this->banco, $this->usuario, $this->senha);
			}
			return self::$conexao;
		}catch(PDOException $e){
			echo 'Error: '.$e->getMessage();
		}
	}
}
?>