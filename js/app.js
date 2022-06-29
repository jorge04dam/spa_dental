// Elementos ocultos
$('#cargando').hide();
$('#resultado').hide();

// Eventos 
$('#btn_ini').click(function(){
    $('#cargando').show();
    $('#resultado').show();
    $('#resultado').html("Iniciando sesion...");
	$('#form').hide();	

    setTimeout(() => {
        $.post('servidor/db.php',{
            nombre: 	$('#name_user').val(),
            contraseña:	$('#password').val()
        },
        function(info, estado){
            div  =	document.getElementById('resultado');
            div.style.display = '';		
            
            console.log(info);
            if(info == "iniciando_sesion_admin"){
                window.location.replace('Bienvenida_admin.php');

               
            }else if(info == "iniciando_sesion_recep"){
                window.location.replace('Bienvenida_recepcion.php');
               
            }
            else if(info == "sesion_iniciada"){
                alert("el usuario ya ha iniciado sesion");
            }
            else if(info == "estan vacios"){
                $('#resultado').html("Error: Los campos estan vacios.");
               
                setTimeout(() => {
                    $('#resultado').html("");
                    $('#resultado').hide();
                }, 3000);        
            }
        })
        $('#resultado').hide();
        $('#cargando').hide();
		$('#form').show();
    }, 3000);
    
});

$('#btn_cancel').click(function(){
    $('#cargando').show();
    div  =	document.getElementById('resultado');
    div.style.display = ' ';
    $('#resultado').html("Cancelando...");
    setTimeout(() => {
        $('#cargando').hide();
        $('#resultado').html("");
        window.location.replace("login.php");
    }, 3000);
});
 $('#registrar').click(function(){
    window.location.replace("crear_usuario.php");
    console.log("boton registrar");
 });

 $('#btn_creando').click(function(){
    //al dar click en boton registrar
    $('#cargando').show();
	$('#form').hide();	
    div  =	document.getElementById('resultado');
    div.style.display = ' ';
    $('#resultado').html("Creando usuario...");

    //Validando campos completos
    if($('#name').val()!=="" &&
        $('#name_user').val()!=="" &&
        $('#password').val()!=="" &&
        $('#confirm_password').val()!==""){
            
        //validando contraseñas iguales
        if($('#password').val() == $('#confirm_password').val()){
            $('#resultado').html("Las contraseñas coinciden");

            $.post('servidor/envio.php',{
                name:       $('#name').val(),
                nickname:   $('#name_user').val(),
                password:   $('#password').val(),
                
            },function(info, estado){
                if(info == "success"){
                    $('#resultado').html("El usuario se creo exitosamente");
                    setTimeout(() => {
                        window.location.replace("pruebas/prueba.php");
                    }, 3000);
                }
                else{
                    $('#resultado').html("Error: no se pudo crear el usuario. Intente otra vez");
                }
            })

        }
        else{
            $('#resultado').html("Las contraseñas no coinciden");
        }

    }else{
        $('#resultado').html("Por favor, llene todos los campos.");
    }
    //retardo
    setTimeout(() => {
        $('#resultado').html("");
        $('#cargando').hide();
		$('#form').show();	
    }, 4000);
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