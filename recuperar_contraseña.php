
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
    <div class="container_login">
      <h1 class= "mensaje_bienvenida recu_titulo">Recuperar clave</h1>
    <form action="email/mail.php" method = "post" class="form_login_usuario recu_form">
        
        <label for="name_user"></label>
        <input type="text" id="name_user" placeholder="Nombre de usuario">
        <label for="keyword"></label>
        <input type="keyword" id="keyword" placeholder="Palabra clave">
        <input type="button" value="Cancelar" class="btn_cancelar" id="btn_cancel">
        <input type="hidden" value="Iniciar sesion" class="btn_crear" id="btn_ini">
        <input type="button" value="Recuperar" class="btn_iniciar" id="recuperar">
        <div id="resultado"></div>
        <div id="cargando"><img src="img/pulso.gif" alt=""></div>
        <!-- <div id="resultado"> -->
        
        <input type="hidden" name="" id="btn_creando">
        <input type="hidden" name="" id="add">
        <input type="hidden" name="" id="usuario_sesion">
        <input type="hidden" name="" id="registrar">
       
    </form>
    </div>
    
    <?php 
    include 'library.php';
    // include 'footer.php';
    ?>
    <script type="text/javascript" src="js/app.js"></script>
    
</body>
</html>