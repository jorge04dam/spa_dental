<?php 
    include 'connect.php';
    if($_POST){
        
        // $update_insumo = "SELECT * FROM product where `name_product` = '$product'";

        // mysqli_select_db($conn, $database);
        // $response = mysqli_query($conn, $update_insumo);

        // $response = mysqli_num_rows($response);
 
        // if($response){
        //     echo "El articulo ya existe";
        // }else{
        //     echo "No existe";
        // }

        $busqueda = $_POST['busqueda'];
        // echo $busqueda;
        $cabecera_tabla = "";
        //  "
        // <table>
        //     <thead style='background: rgba(155,155,155,0.5);'>
        //      <tr>
        //             <th>Producto</th>
        //             <th>Marca</th>
        //             <th>Proveedor</th>
        //             <th>Cantidad</th>
        //             <th>Precio</th>
        //             <th>Fecha</th>      
        //         </tr>
            
        //     </thead>";;
        
        echo $cabecera_tabla;
       
        if($_POST['accion'] == "1"){$tabla = $table_patient;}
        if($_POST['accion'] == "2"){$tabla = $table_doctor;}
        if($_POST['accion'] == "3"){$tabla = $table_inventory;}
        // echo $_POST['accion'] == "1" ? $tabla = $table_patient:  
        //     $_POST['accion'] == "2" ? $tabla = $table_doctor: 
        //     $_POST['accion'] == "3" ? $tabla = $table_inventory:

        if($_POST['accion'] == "1"){
            // $tabla = $table_patient;
        $consulta = "SELECT * FROM `$tabla` where `name` LIKE '%$busqueda%'";
         
        mysqli_select_db($conn, $database);
        $datos = mysqli_query($conn, $consulta);

        $resultado = mysqli_num_rows($datos);
        if(!$resultado > 0){
            echo "No se ha encontrado ningun resultado para esa busqueda.";
            exit();
        }
      
        
        while ($file = mysqli_fetch_array($datos, MYSQLI_ASSOC)) {
            echo "
            <tbody>

                <tr>
                    <th>".$file['name']."</th>
                    <th>".$file['last_name']."</th>
                    <th>".$file['last_name2']."</th>    
                </tr>
            </tbody>
        
            ";
            
        }
        echo "</table>";
        exit();
        }
        else if($_POST['accion'] == "3"){
            // $consulta = "SELECT * FROM `$table_inventoy` where `name` LIKE '%$busqueda%'";
            $consulta = "SELECT id_inventory, product.name_product, unit_type.name_unit, brend.name_brend, `provider`.name_provider, date, piece_quantity, unit_price, total_price, type_of_input.type_of_input, input.name_input, way_to_pay.way_to_pay, `login`.nickname, movement.name_movement FROM inventory JOIN product on inventory.product_id = product.id_product
            JOIN unit_type on inventory.unit_type_id = unit_type.id_unit_type
            JOIN brend on inventory.brend_id = brend.id_brend
            JOIN `provider` on inventory.product_id = `provider`.id_provider
            JOIN type_of_input on inventory.type_of_input_id = type_of_input.id_type_of_input
            JOIN input on inventory.input_id = input.id_input
            JOIN way_to_pay on inventory.way_to_pay_id = way_to_pay.id_way_to_pay
            JOIN `login` on inventory.user_id = `login`.id
            JOIN movement on inventory.movement_id = movement.id_movement
            ";
            mysqli_select_db($conn, $database);
            $datos = mysqli_query($conn, $consulta);

            $resultado = mysqli_num_rows($datos);
        if(!$resultado > 0){
            echo "No se ha encontrado ningun resultado para esa busqueda.";
            exit();
        }
        $cabecera_tabla = "";
        echo $cabecera_tabla = "
        <table>
            <thead style='background: rgba(155,155,155,0.5);'>
             <tr>
                    <th>Artículo</th>
                    <th>Tipo unidad</th>
                    <th>Marca</th>
                    <th>Provedor</th>
                    <th>Fecha</th>
                    <th>Unidades</th>
                    <th>Precio unitario</th>
                    <th>Precio total</th>
                    <th>Tipo insumo</th>
                    <th>Área</th>
                    <th>Forma pago</th>
                    <th>Usuario</th>
                    <th>Movimiento</th>        
                </tr>
            
            </thead>";





        while ($file = mysqli_fetch_array($datos, MYSQLI_ASSOC)) {
            // var_dump($file);
           
            echo "
            <tbody>

                <tr>
                    <th>".$file['name_product']."</th>
                    <th>".$file['name_unit']."</th>
                    <th>".$file['name_brend']."</th>
                    <th>".$file['name_provider']."</th>  
                    <th>".$file['date']."</th>
                    <th>".$file['piece_quantity']."</th>   
                    <th>".$file['unit_price']."</th>
                    <th>".$file['total_price']."</th>
                    <th>".$file['type_of_input']."</th>  
                    <th>".$file['name_input']."</th>
                    <th>".$file['way_to_pay']."</th>
                    <th>".$file['nickname']."</th>
                    <th>".$file['name_movement']."</th>        
                </tr>
            </tbody>
        
            ";
            
        }
        echo "</table>";
        exit();
        }elseif($_POST['accion'] == "0"){
            if($tabla == "patient_prueba"){
                $consulta = "SELECT * FROM `$tabla` where `name` LIKE '%$busqueda%'";
         
        mysqli_select_db($conn, $database);
        $datos = mysqli_query($conn, $consulta);

        $resultado = mysqli_num_rows($datos);
        if(!$resultado > 0){
            echo "No se ha encontrado ningun resultado para esa busqueda.";
            exit();
        }
      
        
        while ($file = mysqli_fetch_array($datos, MYSQLI_ASSOC)) {
            echo "
            <tbody>

                <tr>
                    <th>".$file['name']."</th>
                    <th>".$file['last_name']."</th>
                    <th>".$file['last_name2']."</th>    
                </tr>
            </tbody>
        
            ";
            
        }
        echo "</table>";
            }
            exit();
        }


        
       
        
        
?>

<?php
    }else{
        echo "$_post";
    }
    
?>
  

