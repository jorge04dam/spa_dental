let iniciarSesion 			= document.getElementById("btn_ini");
let btn_cancelar 			= document.getElementById("btn_cancel");
let btn_creando				= document.getElementById("btn_creando");
let nombre 					= document.getElementById("name");
let usuario 				= document.getElementById("name_user");
let contraseña 				= document.getElementById("password");
let confirmar_contraseña	= document.getElementById("confirm_password");

let validarUsuario = (usuario, contraseña) => {
	if(usuario.value == baseUsuarios.usuario && 
		contraseña.value == baseUsuarios.contraseña){
		alert("Contraseña correcta, bienvenido");
		window.location.replace("tareas.html");
	}
	else
	{
		alert("usuario o contraseña incorrecta");
	}

}

let crearUsuario = () => {
	if(contraseña.value == confirmar_contraseña.value){
		alert("las contraseñas coinciden");
		baseUsuarios.usuario 	= usuario.value;
		baseUsuarios.contraseña = contraseña.value;
		window.location.replace("login.html");

	}
	else{
		alert("las contraseñas no coinciden");
	}
}

iniciarSesion.addEventListener('click',function(){
	alert('verificando credenciales');
	validarUsuario(usuario, contraseña);
	});

btn_cancelar.addEventListener('click',function(){
	alert('cancelando...');
	window.location.replace("index.html");
});

btn_creando.addEventListener('click',function(){
	alert('creando usuario...');
	crearUsuario();
});

let credencialesUsuario = {
	usuario: 'jorge04dam',
	contraseña: 'password'
}

let baseUsuarios = {
	usuario: "",
	contraseña: ""
}
