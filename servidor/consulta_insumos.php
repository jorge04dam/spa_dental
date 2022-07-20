<?php
    include 'connect.php';

    $consulta ="SELECT * FROM inventory";

    mysqli_select_db($conn, $database);
    $datos = mysqli_query($conn, $consulta);

    $resultado = mysqli_num_rows($datos);
    if(!$resultado > 0){
        echo "No se ha encontrado ningun resultado para esa busqueda.";
        exit();
    }
    while($file = mysqli_fetch_array($datos, MYSQLI_ASSOC)){
        echo "
            <tbody>

                <tr>
                    <th>".$file['nombre_producto']."</th>
                    <th>".$file['name_marca']."</th>
                    <th>".$file['nombre_proveedor']."</th>
                    <th>".$file['cantidad']."</th>  
                    <th>".$file['precio']."</th>
                    <th>".$file['fecha']."</th>        
                </tr>
            </tbody>
        
            ";
    }

?>

<!-- SELECT * FROM inventory join product on inventory.product_id = product.id_product; -->