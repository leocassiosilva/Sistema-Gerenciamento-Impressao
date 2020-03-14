<html>
<head>
    <title>Printif</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container py-5">
    <div id="login-alert">
        <span id="mensagem"></span>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 text-center mb-2">
                <img src="resources/img/logo.png">
            </div>

            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card rounded-0" id="login-form">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form"  id="login-form" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" required="">

                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="senha" name="senha" required="">

                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                        <a href="javascript:void('register-form-link');" class="register-form-link">Cadastro</a>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <a href="javascript:void('forgot-form-link');" class="forgot-form-link">Esqueceu senha</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin" name="btnLogin">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="resources/js/login.js"> </script>
</html>