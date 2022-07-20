<?php 
    include 'connect.php';
    if($_POST){
        $busqueda = $_POST['busqueda'];
        // echo $busqueda;
        echo "<h3>Resultados de la busqueda</h3>";
        echo "
        <table>
            <thead style='background: rgba(155,155,155,0.5);'>
             <tr>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Proveedor</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Fecha</th>      
                </tr>
            
            </thead>";
       
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
            $consulta = "SELECT prodcutos.nombre_producto, marca.name_marca, proveedores.nombre_proveedor, cantidad, precio, fecha FROM inventory inner join marca on inventory.marca_id = marca.id_marca inner join prodcutos on inventory.producto_id = prodcutos.id_producto inner join proveedores on inventory.proveedor_id = proveedores.id_proveedores;
            ";
            mysqli_select_db($conn, $database);
            $datos = mysqli_query($conn, $consulta);

            $resultado = mysqli_num_rows($datos);
        if(!$resultado > 0){
            echo "No se ha encontrado ningun resultado para esa busqueda.";
            exit();
        }
        // $datos1 = json_encode($datos);
        
        while ($file = mysqli_fetch_array($datos, MYSQLI_ASSOC)) {
            // var_dump($file);
           
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
        echo "no hola";
    }
    
?>
  