$(function(){
	function curso(){
		$('#curso').hide();
		$.getJSON(
			'./funcoesCadastroImpressao.php?search=',
			{
				acao: "curso",
				ajax: 'true'
			}, function(j){
				var options = '<option value="">Escolha</option>';
				for (var i = 0; i < j.length; i++) {
					options += '<option value="' + j[i].id_curso + '">' + j[i].nome + '</option>';
				}	
				$('#curso').html(options).show();
				
			});
	}
	curso();


	function turno(curso){
		
		$.getJSON(
			'funcoesCadastroImpressao.php?search=',
			{
				acao: "turno",
				id_curso: curso,
				ajax: 'true'
			}, function(j){
				var options = '<option value="">Escolha</option>';
				for (var i = 0; i < j.length; i++) {
					options += '<option value="' + j[i].id_turno + '">' + j[i].nome + '</option>';
				}	
				$('#turno').html(options).show();
				
			});
	}

	function ano(curso, turno){
		$.getJSON(
			'funcoesCadastroImpressao.php?search=',
			{
				acao: "ano",
				id_curso: curso,
				id_turno: turno,
				ajax: 'true'
			}, function(j){
				var options = '<option value="">Escolha</option>';
				for (var i = 0; i < j.length; i++) {
					options += '<option value="' + j[i].id_ano + '">' + j[i].nome + "° Ano" + '</option>';
				}	
				$('#ano').html(options).show();
				
			});
	}

	var idCurso; 

	$('select[name=curso]').change(function(){
		idCurso = $(this).val();
		turno(idCurso);
	});

	$('select[name=turno]').change(function(){
		var idTurno = $(this).val();
		ano(idCurso, idTurno);
	});
	
});
