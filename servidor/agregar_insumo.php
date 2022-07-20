<?php
    include 'connect.php';

    if($_POST){
        
        $product        = $_POST['product'];
        $brend          = $_POST['brend'];
        $provider       = $_POST['provider'];
        $date           = $_POST['date'];
        $piece          = $_POST['pieces'];
        $total_price    = $_POST['total_price'];
        $unit_price     = $_POST['unit_price'];
        $type_input     = $_POST['type_input'];
        $input          = $_POST['input'];
        $way_to_pay     = $_POST['way_to_pay'];
        
        $consulta = "INSERT INTO `inventory` (`id_inventory`, `product_id`, `brend_id`, `provider_id`, `date`, `piece_quantity`, `unit_price`, `total_price`, `type_of_input_id`, `input_id`, `way_to_pay_id`) VALUES (NULL, '$product', '$brend', '$provider', '$date', '$piece', '$unit_price', '$total_price', '$type_input', '$input', '$way_to_pay')";
        mysqli_select_db($conn, $database);
        $datos = mysqli_query($conn, $consulta);
        echo "200";  
    }else{
        echo "el post no esta declarado, revisar el contenido de la variable post";
    }
?>