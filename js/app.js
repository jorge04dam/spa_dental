// Elementos ocultos
$('#cargando').hide();
$('#resultado').hide();

// Eventos 
$('#btn_ini').click(function(){
    $('#cargando').show();
    $('#con_resp').html("");
    $('#con_resp').append("<div id='resultado_ok'></div>");
 
    $('#resultado_ok').html("Iniciando sesion...");
	$('#form').hide();
    
    setTimeout(() => {

        if($('#name').val()!=="" &&
        $('#password').val()!==""){
            $.post('../servidor/db.php',{
                nombre: 	$('#name_user').val(),
                contraseña:	$('#password').val()
            },
            function(info, estado){
                
                console.log(info);
                if(info == "iniciando_sesion_admin"){
                   
                    window.location.replace('bienvenida.php');

                }else if(info == "iniciando_sesion_recep"){
                    window.location.replace('tablero.php');
               
                }
                else if(info == "sesion_iniciada"){
                    $('#con_resp').html("");
                    $('#con_resp').show();
                    $('#con_resp').append("<div id='resultado_error'></div>");
                    $('#resultado_error').html("Error: El usuario ya ha iniciado sesion.");
                    $('#form').show();

                }else if(info == "credenciales_incorrectas"){
                    $('#con_resp').html("");
                    $('#con_resp').show();
                    $('#con_resp').append("<div id='resultado_error'></div>");
                    $('#resultado_error').html("Error: Usuario o contraseña incorrecta.");
                    $('#form').show();
                }
                else if(info == "estan vacios"){
                    $('#resultado').html("Error: Los campos estan vacios.");
               
                    setTimeout(() => {
                        $('#resultado').html("");
                        $('#resultado').hide();
                    }, 3000);        
                }
            })
        }else{
        $('#con_resp').show();
        $('#con_resp').html("");
        $('#con_resp').append("<div id='resultado_error'></div>");
        $('#resultado_error').html("Error: Los campos estan vacios, llene todos los campos  .");
        $('#form').show();

        
        }
        $('#con_resp').show();
        $('#cargando').hide();
    
        setTimeout(() => {
            $('#con_resp').html("");
            $('#form').show();
        
        }, 3000);
    }, 3000);	
   
});

$('#btn_cancel').click(function(){
    $('#cargando').show();
    $('#con_resp').html("");
    $('#con_resp').append("<div id='resultado_ok'></div>");
 
    $('#resultado_ok').html("Cancelando...");
	$('#form').hide();
    setTimeout(() => {
        $('#cargando').show();
        $('#resultado_ok').html("Cancelando...");
        window.location.replace("../index.php");
    }, 3000);
});
 $('#registrar').click(function(){
    window.location.replace("crear_usuario.php");
    console.log("boton registrar");
 });

 $('#btn_creando').click(function(){
    $('#cargando').show();
    $('#con_resp').show();
    $('#con_resp').html("");
    alert("validar captura");
    $('#con_resp').append("<div id='resultado_ok'></div>");
 
    $('#resultado_ok').html("Creando usuario...");
	$('#form').hide();
    

    //Validando campos completos
    setTimeout(() => {
        if($('#name').val()!=="" &&
        $('#name_user').val()!=="" &&
        $('#password').val()!=="" &&
        $('#confirm_password').val()!=="" &&
        $('#position').val()!== ""){
            
        //validando contraseñas iguales
        if($('#password').val() == $('#confirm_password').val()){
            
            $.post('../servidor/envio.php',{
                name:       $('#name').val(),
                nickname:   $('#name_user').val(),
                password:   $('#password').val(),
                position:   $('#position_select').val()
                
            },function(info, estado){
                console.log(info);
                if(info == "success"){
                    setTimeout(() => {
                        window.location.replace("login.php");
                    }, 3000);
                }
                else{
                    $('#con_resp').show();
                    $('#con_resp').html("");
                    $('#con_resp').append("<div id='resultado_error'></div>");
                    $('#resultado_error').html("Error: no se pudo crear el usuario. Intente otra vez");
                }
            })

        }
        else{
            $('#con_resp').show();
            $('#con_resp').html("");
            $('#con_resp').append("<div id='resultado_error'></div>");
            $('#resultado_error').html("Error: La contraseña no coinciden");
        }

    }else{
        $('#con_resp').html("");
        $('#con_resp').append("<div id='resultado_error'></div>");
        $('#resultado_error').html("Por favor, llene todos los campos.");

    }
    //retardo
    setTimeout(() => {
        $('#con_resp').html("");
        $('#cargando').hide();
		$('#form').show();	
    }, 4000);
    }, 3000);
 });

 $('#recuperar').click(function(){
	$('#cargando').show();
	$('#resultado').html("Cargado....")
	setTimeout(() => {
		$.post('email/mail.php',{
			name: 	$('#name_user').val(),
			email:	$('#keyword').val()
		},function(info,estado){
			console.log(info);
		})

		$('#cargando').hide();
		$('#resultado').html("")
	}, 3000);
 });
 
 $('#usuario_sesion').click(function(){
    alert("cerrando sesion");
    $.post('../servidor/cerrar_sesion.php',{
        cerrar: 0,
        nickname: 'jorgedam' 
    },function(info, estado){
        console.log(info);
        if(info == 1){
            setTimeout(() => {
                window.location.replace("login.php");
            }, 3000);
        }
        else{
            $('#con_resp').show();
            $('#con_resp').html("");
            $('#con_resp').append("<div id='resultado_error'></div>");
            $('#resultado_error').html("Error: no se pudo cerra la sesión");
        }
    })
 });

$('.btn_buscar').click(function(){
    // alert('buscando');
    let parametros = {
        "busqueda": $('#busqueda').val()
    };
    $.ajax({
        data:   parametros,
        url:    '../servidor/buscar.php',
        type:   'post',

        beforesend: function(){
            $('#resultado').html('Buscando...');
            console.log('antes del success');
        },
        success: function(mensaje){
            $('#resultado').html(mensaje);
            $('#resultado').show();
            // console.log('success');
            console.log(mensaje);
        }
    });
	
	
});

// $('.btn_buscar').click(function(){
//     // alert('buscando');
//     $('#cargando').show();
// 	$('#resultado').html("Cargado....")
// 	setTimeout(() => {
// 		$.post('../servidor/buscar.php',{
// 			busqueda: 	$('#busqueda').val()
// 		},function(info,estado){
// 			console.log(info);
//             // if(info == "ok"){
//             //     window.location.replace("");
//             // }
// 		})

// 		$('#cargando').hide();
// 		$('#resultado').html("")
// 	}, 3000);
// });
