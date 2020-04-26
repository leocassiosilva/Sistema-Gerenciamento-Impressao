<html>
<head>
  <title>Cadastro de Usuario</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />
</head>
<body>
  <div class="container py-5">
    <div class="row">
      <div id="cad-alert" style="display: none;">
        <span id="mensagem"></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12 text-center mb-2">
        </div>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card rounded-0" id="login-form">
              <div class="card-header">
                <h3 class="mb-0">Cadastro</h3>
              </div>
              <div class="card-body">
                <form method="POST" action="../control/ControleUsuario.php">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                     <label for="inputNome">Nome</label>
                     <input type="text" class="form-control" name="nome" id="nome" required="" placeholder="Maria da Silva">
                   </div>
                 </div>
                 <div class="form-group">
                  <label for="inputEmail">E-mail</label>
                  <input type="email" class="form-control" name="email" id="email" required="" placeholder="maria@ifrn.edu.br">
                </div>
                <div class="form-row">
                 <div class="form-group col-md-12">
                   <label for="inputMatricula">Matricula</label>
                   <input type="text" class="form-control" name="matricula" id="matricula" required=""
                   placeholder="2018209394949">
                 </div>
               </div>

               <div class="form-row">
                <div class="form-group col-md-12">
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required="">
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-primary" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../resources/js/cadastro.js"></script>

</html>