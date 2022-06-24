// Elementos ocultos
$('#cargando').hide();


// Eventos 
$('#btn_ini').click(function(){
    $('#cargando').show();

    setTimeout(() => {
        $.post('../servidor/db.php',{
            nombre: 	$('#name_user').val(),
            contraseña:	$('#password').val()
        },
        function(info, estado){
            div  =	document.getElementById('resultado');
            div.style.display = ' ';		
            
            console.log(info);
            if(info == "true"){
                window.location.replace('tareas.html');
            }else{
                $('#resultado').html("El usuario o contraseña es incorrecta, intente otra vez");
                        
            }
        })





        $('#cargando').hide();
    }, 5000);
    
  
});

