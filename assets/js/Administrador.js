function inicio(){
	onClickBuscarAlumno();
}

function onClickBuscarAlumno(){
	alert($('#btnBuscarAlumno001').val());
	$('#btnBuscarAlumno001').click(function(){
		var nombreAlumno = $('#nombreAlumno').val();
		var numeroCuenta = $('#numeroCuenta').val();

		var url = base_url + "index.php/ControlAdministrador/obtCalificaciones";
		$.ajax({
			type:'POST',
			url:url,
			dataType:'json',
			data:{nombreAlumno:nombreAlumno,numeroCuenta:numeroCuenta},
			success:function(data,status,jqXHR){
				console.log(data);
			},
			error:function(xhr, ajaxOptions, thrownError){
				console.log(xhr);
				console.log(ajaxOptions);
				console.log(thrownError);
			},
		});

	});
}