
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Dental Linda Vista</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="img" href="/">
</head>
<body>
    <div class="form_crear_usuario">
        <h1>Crear usuario</h1>
        <form action="servidor/envio.php" class="form_crear_usuario" method = "post"   >
            <div id="form">
            <label for="name"></label>
            <input type="text" id="name" placeholder="Nombre">
            <label for="name_user"></label>
            <input type="text" id="name_user" placeholder="Nombre de usuario">
            <label for="password"></label>
            <input type="password" id="password" placeholder="Contraseña">
            <label for="confirm_password"></label>
            <input type="password" id="confirm_password" placeholder="Confirmar Contraseña">
            <input type="button" value="Cancelar" class="btn_cancelar" id="btn_cancel">
            
            <input type="button" value="Crear usuario" class="btn_iniciar" id="btn_creando">
            </div>
            <div class="prueba" id= "resultado"></div>
            <div id="cargando"><img src="img/pulso.gif" alt=""></div>
            <input type="hidden" name="" id="btn_ini">
            <input type="hidden" name="" id="usuario_sesion">
            <input type="hidden" name="" id="add">
            <input type="hidden" name="" id="registrarse">
            <!-- <input type="hidden" name="" id="cargando"> -->
         <!-- <button type="submit">Cancelar</button>
        <button type="submit">Crear</button> -->
        </form>
    </div>
    
    <footer class="footer">
        <p>Todos los derechos reservado ®Spa Dental Linda Vista ®2022</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>