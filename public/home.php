<?php 
session_start();

if($_SESSION["logado"] == "sim"){
	$nome = $_SESSION["nome"];
	$email = $_SESSION["email"];
	$id_usuario = $_SESSION["id_usuario"];
	$id_tipo = $_SESSION["tipo"];
}else{
	header("location: ../index.php"); 
}
?>
<!DOCTYPE html>
<html>

<head>
	<?php
	if ($id_tipo == 2 || $id_tipo == 3) {
		echo "<title>Solicitações</title>";
	}else {
		echo "<title>Cadastros de Solicitações</title>";
	}
	?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><strong>PRINTIF</strong></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a><i title="" aria-hidden="true"> Nome:</i> <?=$nome ?></a></li>
					<li><a><i class="glyphicon glyphicon-cog" title="" aria-hidden="true"></i> Sua conta</a></li>
					<li><a href="logout.php"><i class="glyphicon glyphicon-off" title="" aria-hidden="true"></i> Sair</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container ">
		<div class="row">
			<h1>Painel de Solicitações dos Profesores </h1>
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default panel-table">
					<div class="panel-heading">
						<div class="row">
							<div class="col col-xs-6 align-self-center">
								<h3 class="panel-title">Solicitações</h3>
							</div>
							<div class="col col-xs-6 text-right">
								<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="glyphicon glyphicon-plus"></i></button>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th>Name</th>
									<th>Disciplina</th>
									<th>Turma</th>
									<th>Turno</th>
									<th>Quantidade</th>
									<th>Lado</th>
									<th>Data</th>
									<th>Status</th>
									<th>Editar</th>
									<th class="text-right">Excluir</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">1</td>
									<td>Jefferson</td>
									<td>Banco de Dados</td>
									<td>ADS</td>
									<td>Vespertino</td>
									<td>10</td>
									<td>Frente</td>
									<td>31/09/2020</td>
									<td>
										Solicitado
									</td>
									<td>
										<button type="button" rel="tooltip" class="btn btn-primary btn-just-icon btn-sm" data-original-title="" title="" id="btnEditar">
											<i class="glyphicon glyphicon-pencil"></i>
										</button>
									</td>
									<td class="td-actions text-right">
										<button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="" id="btnExcluir">
											<i class="glyphicon glyphicon-trash"></i>
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="TituloModalCentralizado">Cadastrar Impressão</h4>
			</div>
			<div class="modal-body">
				<form id="cadastroImpressao" class="form" action="" method="post">
					<div class="form-row">
						<div class="form-group col-md-8">
							<label>Nome da Atividade</label>
							<input id="nome" name="nome" type="text" placeholder="Prova" class="form-control input-md">
						</div>
						<div class="form-group col-md-4">
							<label class="col-md-4 control-label">Quantidade</label>
							<input id="quantidade" name="quantidade" type="number" placeholder="10" class="form-control input-md">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="tipo" id="tipo" value="1">
								<label class="form-check-label" for="inlineRadio2">Atividade Avaliativa</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="tipo" id="tipo" value="2">
								<label class="form-check-label" for="inlineRadio2">Atividade</label>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="curso">Curso:</label>
							<select name="curso" id="curso" class="form-control">
							</select> 
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="turno">Turno:</label>
							<select name="turno" id="turno" class="form-control">
								<option value="">Escolha</option>
							</select> 
						</div>
						<div class="form-group col-md-6">
							<label for="ano">Ano:</label >
							<select name="ano" id="ano" class="form-control">
								<option value="">Escolha</option>
							</select> 
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Lado</label><br>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="lado" id="lado" value="1">
								<label class="form-check-label" for="inlineRadio2">Frente</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="lado" id="lado" value="2">
								<label class="form-check-label" for="inlineRadio2">Frente e Verso</label>
							</div>
						</div>

						<div class="form-group col-md-6">
							<label>Data</label>
							<input id="data" name="data" type="date" placeholder="DD/MM/AAAA" class="form-control input-md" maxlength="10">
						</div>
					</div>
					<!-- Local de envio do arquivo que vai ser impresso-->
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Arquivo</label>
							<input type="file" class="form-control-file" id="arquivo" name="arquivo" aria-describedby="fileHelp">
						</div>
					</div>
					<div class="modal-footer">
						<!-- Grupo de botões-->
						<div class="form-group">
							<label class="col-md-4 control-label"></label>
							<div class="col">
								<button id="btncadastroImpressao" name="btncadastroImpressao" class="btn btn-success">Solicitar</button>
								<button id="id_cancelar" name="id_cancelar" class="btn btn-danger">Cancelar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">var id = "<?= $id_usuario ?>";</script>
	<script src="cad.js"></script>
</body>
</html>