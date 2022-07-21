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
                // include '../include/main.php';
            ?>
            <article class="main">
                <br><br>
                <h1 style = "color:white">Inventario</h1>
                <?php 
                    include 'agregar_inventario.php';
                ?>
                <!-- <input type="button" placeholder="consultar" value="consultar" style="width:100px;"> -->
                <div id="resultado">
                    
                </div>
            </article>
            <input type="hidden" id="user_online" value="<?php echo $_SESSION['id'];?>">

            <?php
                include '../include/footer.php'; 
            ?> 
            
        </body>  
       
    <?php 
    include '../include/library_js.php'; 
    
    ?>
    

    <!-- inventario:

    movimientos
        --consumo           / salida
        --abastecimiento    / entrada -->