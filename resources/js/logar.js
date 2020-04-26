
$('document').ready(function(){ 
	$('#btnLogin').on('click', function(){
		var email = $("#email").val();
		var senha = $("#senha").val();
		alert("dkjsdkj")
		jQuery.ajax({
			type: "POST",
			url: "./control/ControleLogin.php",
			data:{
				email: email,
				senha:senha
			},
			dataType: 'json',
			success: function(response)
			{
				console.log(response);
				if (response.codigo  == 1) {
					$("#mensagem").html('<strong>Obrigado! </strong>' + response.mensagem);
					$("#login-alert").addClass( "col-md-6 mx-auto alert alert-success").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);         
				}else {
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
					$("#login-alert").addClass( "col-md-6 mx-auto alert alert-danger").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);
				}
				$("#email").val("");
				$("#senha").val("");
			}
		});
		return false;
	});
});
