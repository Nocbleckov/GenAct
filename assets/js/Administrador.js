function inicio(){
	onClickBuscarAlumno();
}

function onClickBuscarAlumno(){
	$('#btnBuscarAlumno001').click(function(){

		var nombreAlumno = $('#nombreAlumno').val();
		var numeroCuenta = $('#numeroCuenta').val();

		nombreAlumno = nombreAlumno.toUpperCase();
		numeroCuenta = numeroCuenta.trim();

		var url = base_url + "index.php/ControlAdministrador/obtCalificaciones";
		$.ajax({
			type:'POST',
			url:url,
			dataType:'json',
			data:{nombreAlumno:nombreAlumno,numeroCuenta:numeroCuenta},
			success:function(data,status,jqXHR){
				for(var resp in data){
					console.log(resp,data[resp]);
					mstResultados(data[resp]);
				}
			},
			error:function(xhr, ajaxOptions, thrownError){
				console.log(xhr);
				console.log(ajaxOptions);
				console.log(thrownError);
			},
		});

	});
}


function mstResultados(dataR){
	/*var nombreAlumno = data.nombreAlumno;
	var numeroCuenta = data.numeroCuenta;
	var calificacion = data.calificacion;
	var nombreLaboratorio = data.nombreLaboratorio;
	var numeroLaboratorio = data.numeroLaboratorio;
	var semestre = data.semestre;

	var dataPost = {
		nombreAlumno:nombreAlumno,
		numeroCuenta:numeroCuenta,
		calificacion:calificacion,
		nombreLaboratorio:nombreLaboratorio,
		numeroLaboratorio:numeroLaboratorio,
		semestre:semestre
	};*/

	var url = base_url+"index.php/ControlAdministrador/vistaRes";

	$.ajax({
		type:'POST',
		url:url,
		dataType:'text',
		data:dataR,
		success:function(data,status,jqXHR){
			console.log(data);
		},
		error:function(xhr, ajaxOptions, thrownError){
			console.log(xhr);
			console.log(ajaxOptions);
			console.log(thrownError);
		},

	});

}