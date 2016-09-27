function VolverHome(){
	window.open("index.php","_self");
}

function validarLI(){//Entrada con una cuenta
	var x = document.forms["formLogIn"]["login"].value;
	if(x == null || x == ""){
		alert("Para acceder ingrese su correo electrónico o nombre de usuario")
		return false;
	}
	else{
		var x = document.forms["formLogIn"]["password"].value;
		if(x == null || x == ""){
			alert("Para acceder ingresa tu contraseña")
			return false;
		}
		else{
			//window.open("PaginasHTML/PgPrincipal.jsp","_self");
			return true;
		}
	}
}