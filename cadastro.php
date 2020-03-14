<html>
<head>
  <title>Cadastro de Usaurio</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-12 text-center mb-2">
        <img src="resources/img/logo.png">
      </div>
      <div id="cad-alert">
        <span id="mensagem"></span>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card rounded-0" id="login-form">
            <div class="card-header">
              <h3 class="mb-0">Cadastro</h3>
            </div>
            <div class="card-body">
              <form class="form" role="form" name="forms" id="forms" novalidate="" method="POST">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control form-control-lg rounded-0" name="nome" id="nome" required="">

                </div>

                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" required="">
                </div>
                
                <div class="form-group">
                  <label for="matricula">Matricula</label>
                  <input type="text" class="form-control form-control-lg rounded-0" name="matricula" id="matricula" required="">
                </div>

                <div class="form-group">
                  <label>Senha</label>
                  <input type="password" class="form-control form-control-lg rounded-0" id="senha" name="senha" required="">

                </div>

                <button type="submit" class="btn btn-success btn-lg float-right" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
              </form>
            </div>
            <div id="login-alert">
              <span id="mensagem"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="resources/js/cadastro.js"> </script>
</html>