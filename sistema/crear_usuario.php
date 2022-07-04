
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Dental Linda Vista</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="img" href="/">
</head>
<body>
    <div class="form_crear_usuario">
        <h1>Crear usuario</h1>
        <form action="servidor/envio.php" class="form_crear_usuario" method = "post">
            <div id="form">
            <label for="name"></label>
            <input type="text" id="name" placeholder="Nombre">
            <label for="name_user"></label>
            <input type="text" id="name_user" placeholder="Nombre de usuario">
            <label for="password"></label>
            <input type="password" id="password" placeholder="Contraseña">
            <label for="confirm_password"></label>
            <input type="password" id="confirm_password" placeholder="Confirmar Contraseña">
            <label for="position"></label>
            <select name="" id="position_select">
                <option value="1" clase= "op">Administrador</option>
                <option value="2" clase= "op" selected>Recepcion</option>
            </select>


            <input type="button" value="Cancelar" class="btn_cancelar" id="btn_cancel">
            
            <input type="button" value="Crear usuario" class="btn_iniciar" id="btn_creando">
            </div>
            <div id="cargando"><img src="../img/pulso.gif" alt=""></div>
            <div id="con_resp">

            </div>
            
            
        </form>
    </div>
    <?php include '../include/library_js.php'; ?>

    
</body>
</html>