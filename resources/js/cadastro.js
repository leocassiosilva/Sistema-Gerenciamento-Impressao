$('document').ready(function(){
	$('#btnCadastrar').on('click', function(){
		alert("ola");
		var nome = $("#nome").val();
		var email = $("#email").val();
		var matricula = $("#matricula").val();
		var senha = $("#senha").val();
		var tipo = 1;

		$.ajax({
			type : 'POST',
			url  : 'src/valida_cadastro.php',
			data:{
				nome: nome,	
				email: email,
				matricula: matricula,
				senha:senha,
				tipo: tipo,
			},
			dataType: 'json',

			success :  function(response){
				console.log(response.codigo);	
				if(response.codigo == 1){
					$('#mensagem').append(response.mensagem);
					window.location.href = "index.php";
				}
				else{			
					$("#cad-alert").css('display', 'block');
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn( 300 ).delay( 1900 ).fadeOut( 400 );
				}
			}
		});
	});
});
