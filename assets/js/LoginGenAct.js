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
			data:{nombreUsuario:nombreUsuario,pass:pass},
			success:function(data,status,jqXHR){
				if(data.length > 0){
					console.log(data[0]);
					//$.load(base_url+"index.php/ControlAdministrador");
					redirect(base_url+"index.php/ControlAdministrador",data[0]);
				}else{
					console.log("no existe");
					alert("El Nombre de usuario o la contraseña son incorrectos");
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

function redirect(url,usuario){
	$('#loginData').attr('action',url);
	$('#nombreUsuarioData').val(usuario.nombreUsuario);
	$('#nombreIngresoData').val(usuario.nombreIngreso);
	$('#privilegiosData').val(usuario.privilegios);
	$('#loginData').submit();
}