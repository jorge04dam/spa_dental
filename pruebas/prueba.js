/*AJAX ES UNA TECNICA O MODO DE PROGRAMACION QUE PERMITE ACTUALIZAR UNA PARTE DE LA PAGINA WEB (SISTEMA WEB) SIN NECESIDAD
DE RECARGAR LA PAGINA ENTERA.
VENTAJAS:
--MEJOR MANEJO DE LOS DATOS
--NO ES NECESARIO RECARGAR TODO LA PAGINA
--LOS TIEMPOS DE ESPERA SON CORTOS
--MEJORANDO LA EXPERIENCIA DE USARIO
--AL NO RECARGAR LA PAGINA, SE PUEDE 
/* EJEMPLO DE IMPLEMENTACION AJAX EN JAVASCRIPT Y PHP CON EL METODO POST */ 

$('#NOMBRE_ELEMNTO').click(nombre_funcion);

function nombre_funcion(){
    $.ajax({
        // nombre del archivo de servidor donde se enviara la informacion
        url: 'directorio del archivo.php',
        // metodo para enviar la informacion
        type: 'post',
        // formato en el que se envia y se recibe -- Json
        dataType: 'json',
        // formato de la informacion
        data: {
            variable: $('#input').val(),
            variable: $('#input').val(),
            variable: $('#input').val()
        }
    }).done(
        function(data){
            $('#salida').append(data);
            // reset a los valores de los input
            $('#inputs').val('');
            $('#inputs').val('');
            $('#inputs').val('');
            
        }
    );
}