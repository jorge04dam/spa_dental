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
<link rel="stylesheet" href="../pruebas/css/inventory_add.css">

<body class="grid-container">
            <?php 
                include '../include/header.php';
                include '../include/sidebar.php';

                include '../servidor/connect.php';
    /*consulta para la tabla productos*/
    $consulta_producto = "SELECT * FROM product";
    mysqli_select_db($conn, $database);
    $datos_producto = mysqli_query($conn, $consulta_producto);

    /*consulta para la tabla tipo de unidad*/
    $consulta_unit_type = "SELECT * FROM unit_type";
    $datos_unit_type = mysqli_query($conn, $consulta_unit_type);

    /*consulta para la tabla brend*/
    $consulta_brend = "SELECT * FROM brend";
    $datos_brend = mysqli_query($conn, $consulta_brend);

    /*consulta para la tabla tipo provider*/
    $consulta_provider = "SELECT * FROM `provider`";
    $datos_provider = mysqli_query($conn, $consulta_provider);

    /*consulta para la tabla tipo de type_of_input*/
    $consulta_type_of_input = "SELECT * FROM type_of_input";
    $datos_type_of_input = mysqli_query($conn, $consulta_type_of_input);

    /*consulta para la tabla tipo de input*/
    $consulta_input = "SELECT * FROM input";
    $datos_input = mysqli_query($conn, $consulta_input);

    /*consulta para la tabla tipo de way_to_pay*/
    $consulta_way_to_pay = "SELECT * FROM way_to_pay";
    $datos_way_to_pay = mysqli_query($conn, $consulta_way_to_pay);
    ?>
    
    <article class="main">
    <br>
    <br><br>
        <form action="../servidor/agregar_insumo.php" method="post" id="inventory_add">

        <select name="" id="insumo" >
            <?php
                while($fila = mysqli_fetch_array($datos_input, MYSQLI_ASSOC)){
                    //echo "<option value=".$fila['id_product'].">".$fila['name_product']."</option>";
                    echo "<option value=".$fila['id_input'].">".$fila['name_input']."</option>";
                }
            ?>
        </select>
        <select name="" id="tipo_insumo" >
            <?php
            while($fila = mysqli_fetch_array($datos_type_of_input, MYSQLI_ASSOC)){
                //echo "<option value=".$fila['id_product'].">".$fila['name_product']."</option>";
                echo "<option value=".$fila['id_type_of_input'].">".$fila['type_of_input']."</option>";
            }
            ?>
        </select>
            <select name="" id="product" placeholder="marca">
            <?php
                while($fila = mysqli_fetch_array($datos_producto, MYSQLI_ASSOC)){
                    //echo "<option value=".$fila['id_product'].">".$fila['name_product']."</option>";
                    echo "<option value=".$fila['id_product'].">".$fila['name_product']."</option>";
                }
            ?>

        </select>
        <select name="" id="unit_type" placeholder="marca">
        <?php
            while($fila = mysqli_fetch_array($datos_unit_type, MYSQLI_ASSOC)){
                //echo "<option value=".$fila['id_product'].">".$fila['name_product']."</option>";
                echo "<option value=".$fila['id_unit_type'].">".$fila['name_unit']."</option>";
            }
        ?>
        </select>
        <input type="text" id= "piezas" placeholder="cantidad en pzs">
        <input type="text" id= "precio_total" placeholder="precio total">
        <p id="precio_unitario" onclick = "unitario()">precio unitario</p>
        <select name="" id="brend" placeholder="marca">
            <?php
            while($fila = mysqli_fetch_array($datos_brend, MYSQLI_ASSOC)){
                //echo "<option value=".$fila['id_product'].">".$fila['name_product']."</option>";
                echo "<option value=".$fila['id_brend'].">".$fila['name_brend']."</option>";
            }
            ?>
        </select>
        <select name="" id="provider" >
            <?php
            while($fila = mysqli_fetch_array($datos_provider, MYSQLI_ASSOC)){
                //echo "<option value=".$fila['id_product'].">".$fila['name_product']."</option>";
                echo "<option value=".$fila['id_provider'].">".$fila['name_provider']."</option>";
            }
        ?>
    </select>
    
    <input type="date" id="fecha" placeholder="fecha">

    <select name="" id="forma_pago" >
    <?php
            while($fila = mysqli_fetch_array($datos_way_to_pay, MYSQLI_ASSOC)){
                //echo "<option value=".$fila['id_product'].">".$fila['name_product']."</option>";
                echo "<option value=".$fila['id_way_to_pay'].">".$fila['way_to_pay']."</option>";
            }
        ?>
    </select>
    <input type="button" value="Guardar insumo" id="btn_guardar_insumo">
   
</form>
<div id="resultado">

</div>
                </article>
            <?php    
                include '../include/footer.php';
                include '../include/library_js.php';  
            ?> 
            
        </body> 

<?php
    

    // $validar_resultado_producto = mysqli_num_rows($datos_producto);
    // if(!$validar_resultado_producto > 0){
    //     echo "la base de datos regreso una respuesta vacía";
    // }



?>

<!-- orden para agregar inventario
de lo general a lo particular
1  Area             : dental/limpieza/oficina
2  Tipo de insumo   : consumible/instrumental
3  Producto         : cubreboca/guante
4  Tipo unidad      : mililitro/litro/miligramo/gramo
5  Cantidad         : numero de unidades
6  Precio total     : precio total de lo que se adquirio
7  Precio unitario  : precio de una unidad
8  Marca            : marca del producto
9  Fecha            : fecha en la que se hace el registro
10 Forma de pago    : efectivo/transferencia/entre otros.
11 Proveedor        : Nombre del lugar donde se adquieren -->

