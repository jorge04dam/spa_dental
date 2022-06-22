const iniciarSesion 		= document.getElementById("btn_ini");
const btn_cancelar 			= document.getElementById("btn_cancel");
const btn_creando			= document.getElementById("btn_creando");
const nombre 				= document.getElementById("name");
const usuario 				= document.getElementById("name_user");
const contraseña 			= document.getElementById("password");
const confirmar_contraseña	= document.getElementById("confirm_password");
const add 					= document.getElementById("add");
const cerrar_sesion			= document.getElementById("usuario_sesion");
const registrar				= document.getElementById("registrar");
const recuperar				= document.getElementById("recuperar");
const estilosPendiente		= document.getElementById("cardPendiente");
const estilosenProceso		= document.getElementById("cardenProceso");
const estilosRealizado		= document.getElementById("cardRealizado");
const estilos 				= document.getElementById("cardTareas");


let validarUsuario = (usuario, contraseña) => {
	if(usuario.value == credencialesUsuario.usuario && 
		contraseña.value == credencialesUsuario.contraseña){
			if(credencialesUsuario.inicioSesion == false){
				alert("Bienvenido, contraseña correcta");
				credencialesUsuario.inicioSesion = true;
				// window.location.replace("tareas.html");	
			}else{
				alert("El usuario ya ha iniciado sesion");
			}
			

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

// iniciarSesion.addEventListener('click',function(){
// 	alert('verificando credenciales');
// 	validarUsuario(usuario, contraseña);
// 	});

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
	contraseña: 'password',
	inicioSesion: false
}

let baseUsuarios = {
	usuario: "",
	contraseña: ""
}

// let inicioSesion = () =>{
// 	if (1===1){
// 		// window.location.replace("login.html");
// 		return true;
// 	}
// }

// console.log(inicioSesion());

// definir el estado de cada tarea en el tablero de pendientes
let estado = {
	pendiente: true,
	enProceso: false,
	realizado: false
}

if(estado.pendiente == true){
	// cardRealizado
}

$('#btn_ini').click(function(){
	$.post('servidor/db.php',{
		nombre: 	$('#name_user').val(),
		contraseña:	$('#password').val()
	},
	function(info, estado){
		div  =	document.getElementById('resultado');
		div.style.display	= 	'';
		$('#resultado').html(info);
		// $('#resultado').html(estado);
		console.log(info, '<hr>', estado);
	})

	console.log('hola desde ajax 2');
});


// $('#Enviar').click(function(){

// 	$.post('conexion.php',
// 	{
// 		nombre:$('#nombre').val(),
// 		correo:$('#correo').val(),
// 		tel:$('#tel').val(),
// 		direccion:$('#direccion').val(),
// 	},
// 	function(info,estado){

// 		 div = document.getElementById('resultado');
//             div.style.display = '';
// 		$('#resultado').html(info);

// 		});
// });