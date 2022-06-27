// Elementos ocultos
$('#cargando').hide();

// Eventos 
$('#btn_ini').click(function(){
    $('#cargando').show();
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
            if(info == "iniciando_sesion"){
                window.location.replace('tareas.php');
            }
            else if(info == "sesion_iniciada"){
                alert("el usuario ya ha iniciado sesion");
            }
            else if(info == "sesion_no_iniciada" || info == "null"){
                $('#resultado').html("Error: Usuario o contraseña incorrecta. Intente otra vez.");
               
                setTimeout(() => {
                    $('#resultado').html("");
                }, 5000);        
            }
        })
        $('#resultado').html("");
        $('#cargando').hide();
		$('#form').show();
    }, 5000);
    
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