<link rel="stylesheet" href="../pruebas/css/inventory_add.css">
<?php
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
    $consulta_provider = "SELECT * FROM 'provider'";
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

    // $validar_resultado_producto = mysqli_num_rows($datos_producto);
    // if(!$validar_resultado_producto > 0){
    //     echo "la base de datos regreso una respuesta vacía";
    // }



?>
<form action="../servidor/agregar_insumo.php" method="post" id="inventory_add">
    <select name="" id="product" placeholder="marca">
        <?php
            while($fila = mysqli_fetch_array($datos_producto, MYSQLI_ASSOC)){
                //echo "<option value=".$fila['id_product'].">".$fila['name_product']."</option>";
                echo "<option value=".$fila['id_product'].">".$fila['name_product']."</option>";
            }
        ?>
    </select>
    <select name="" id="unit_type" placeholder="marca">
        <option value="0">Tipo unidad</option>
        <option value="1">Pieza</option>
        <option value="2">Mililitro</option>
        <option value="3">Litro</option>
        <option value="4">Miligramo</option>
        <option value="5">Gramo</option>
        <option value="6">Kilogramo</option>
    </select>
    <select name="" id="brend" placeholder="marca">
        <option value="0">marca</option>
        <option value="1">kirkland</option>
        <option value="2">Ambiderm</option>
        <option value="3">Génerico</option>
    </select>
    <select name="" id="provider" >
        <option value="0">Proveedor</option>
        <option value="1">Costco</option>
        <option value="2">Depósito Villa</option>
        <option value="3">Similares</option>
        <option value="4">Dental Moderna</option>
        <option value="5">Depósito Xola</option>
        <option value="6">Ana Maria Gonzalez</option>
    </select>
    
    <input type="date" id="fecha" placeholder="fecha">
    <input type="text" id= "piezas" placeholder="cantidad en pzs">
    <input type="text" id= "precio_total" placeholder="precio total">
    <p id="precio_unitario" onclick = "unitario()">precio unitario</p>
    
    <select name="" id="tipo_insumo" >
        <option value="0">Tipo insumo</option>
        <option value="1">Consumible</option>
        <option value="2">instrumental</option>
    </select>
    
    <select name="" id="insumo" >
        <option value="0">Área</option>
        <option value="1">Dental</option>
        <option value="2">Limpieza</option>
        <option value="3">Papeleria</option>
    </select>
    <select name="" id="forma_pago" >
        <option value="0">Forma de pago</option>
        <option value="1">Efectivo</option>
        <option value="2">Tarjeta de débito</option>
        <option value="3">Transferencia</option>
        <option value="4">Tarjeta de crédito</option>
    </select>
    <input type="button" value="Guardar insumo" id="btn_guardar_insumo">
</form>