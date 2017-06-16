function inicio(){
	onClickIngresar();
}

function onClickIngresar(){

	

	$('#btnIngresar').click(function(){
		var nombreUsuario = $('#nombreUsuario').val();
		var pass = $('#pass').val();
		var url = base_url +"index.php/ControlLogin/datosIngreso";
		$.ajax({
			type:"POST",
			url:url,
			dataType:'json',
			data:{nombreUsuario:'',pass:''},
			success:function(data,status,jqXHR){
				//some else to Commit
			},
			error:function(xhr, ajaxOptions, thrownError){
			},
		});
	});
}