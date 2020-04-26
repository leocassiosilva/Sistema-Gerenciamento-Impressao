<?php

include("Conexao.php");
require_once("../model/Usuario.php");



class loginDAO
{

  private $conexao;


  public function __construct()
  {
    $this->conexao = new Conexao();
  }


  public function login(Usuario $usuario)
  {

    $senha = $usuario->getSenha();
    $email = $usuario->getEmail();

    $query = $this->conexao->conectar()->prepare("SELECT nome, email, id_tipo, id_usuario FROM usuario WHERE email = :email AND senha = :senha");
    $query->bindValue(":email", $email);
    $query->bindValue(":senha", $senha);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);


    if(!empty($resultado)){
      $_SESSION["nome"] = $resultado["nome"];
      $_SESSION["email"] = $resultado["email"];
      $_SESSION['id_usuario'] = $resultado["id_usuario"];
      $_SESSION['logado'] = 'sim';
      return $resultado;
    } 

  }
}

?>
