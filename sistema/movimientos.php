<?php 
        // inicio el metodo global para iniciar una session
        session_start();
        //se verifica que no haya una sesion activa, si hay una, no se permitira el acceso al login
        //¿no Hay una sesion activa o iniciada?
       if(empty($_SESSION['active'])){
           header('location: ../sistema/bienvenida.php');
       }
       include '../servidor/connect.php';
       include '../include/library_css.php';
?> 
<body class="grid-container">
        <?php
            include '../include/header.php';
            include '../include/sidebar.php';
        ?>
        <article class="main">
            <br><br>
            <h3 style="background: white; color: black;">Movimientos en la base de datos</h3>
            <div id="resultado">

            </div>
        </article>
        <?php
            // include '../include/footer.php';
            include '../include/library_js.php';
       ?>
    
</body>