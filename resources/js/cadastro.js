 $('document').ready(function(){ 
 	$('#btnCadastrar').on('click', function(){
 		$("#btnCadastrar").blur();
 		var nome = $("#nome").val();
 		var email = $("#email").val();
 		var matricula = $("#matricula").val();
 		var senha = $("#senha").val();
 		var tipo = 1;
      jQuery.ajax({
      	type: "POST",
      	url: "../control/ControleUsuario.php",
      	data:{
      		nome:nome,
      		email:email,
      		matricula:matricula,
      		senha:senha,
      		tipo:tipo
      	},
      	dataType: 'json',
      	success: function(response)
      	{
      		if (response.codigo == 1) {
      			$("#mensagem").html('<strong>Obrigado! </strong>' + response.mensagem);
      			$("#cad-alert").addClass( "col-md-6 mx-auto alert alert-success").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);         
      			 window.location.href = "../index.php";
      		}else {
      			$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
      			$("#cad-alert").addClass( "col-md-6 mx-auto alert alert-danger").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);
      		}
      	}
      });
      return false;
  });
 });