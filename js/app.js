let iniciarSesion 			= document.getElementById("btn_ini");
let btn_cancelar 			= document.getElementById("btn_cancel");
let btn_creando				= document.getElementById("btn_creando");
let nombre 					= document.getElementById("name");
let usuario 				= document.getElementById("name_user");
let contraseña 				= document.getElementById("password");
let confirmar_contraseña	= document.getElementById("confirm_password");
let add 					= document.getElementById("add");
let cerrar_sesion			= document.getElementById("usuario_sesion");
let registrar				= document.getElementById("registrar");
let recuperar				= document.getElementById("recuperar");

let validarUsuario = (usuario, contraseña) => {
	if(usuario.value == credencialesUsuario.usuario && 
		contraseña.value == credencialesUsuario.contraseña){
		alert("Contraseña correcta, bienvenido");
		window.location.replace("tareas.html");
	}
	else
	{
		alert("usuario o contraseña incorrecta");
	}

}

let recuperarContraseña =() =>{
	if(1 == 1){
		alert("la contraseña es:");
		window.location.replace("login.html");
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
	window.location.replace("index.php");
});

btn_creando.addEventListener('click',function(){
	alert('creando usuario...');
	crearUsuario();
});

add.addEventListener('click', function(){
	let nombre_pendiente = prompt("Nombre del pendiente");
});

cerrar_sesion.addEventListener('click', function(){
	alert("Cerrando sesion");
});

registrar.addEventListener('click', function(){
	window.location.replace("crear_usuario.html")
});

recuperar.addEventListener('click', function(){
	recuperarContraseña();
});

let credencialesUsuario = {
	usuario: 'jorge04dam',
	contraseña: 'password'
}

let baseUsuarios = {
	usuario: "",
	contraseña: ""
}

let inicioSesion = () =>{
	if (1===1){
		// window.location.replace("login.html");
		return true;
	}
}

console.log(inicioSesion());
