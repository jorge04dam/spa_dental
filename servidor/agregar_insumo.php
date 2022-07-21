<?php
    include 'connect.php';

    if($_POST){
        
        $product        = $_POST['product'];
        $unit_type      = $_POST['unit_type'];
        $brend          = $_POST['brend'];
        $provider       = $_POST['provider'];
        $date           = $_POST['date'];
        $piece          = $_POST['pieces'];
        $total_price    = $_POST['total_price'];
        $unit_price     = $_POST['unit_price'];
        $type_input     = $_POST['type_input'];
        $input          = $_POST['input'];
        $way_to_pay     = $_POST['way_to_pay'];
        
        $consulta = "INSERT INTO `inventory` (`id_inventory`, `product_id`,`unit_type_id`,`brend_id`, `provider_id`, `date`, `piece_quantity`, `unit_price`, `total_price`, `type_of_input_id`, `input_id`, `way_to_pay_id`) VALUES (NULL, '$product','$unit_type', '$brend', '$provider', '$date', '$piece', '$unit_price', '$total_price', '$type_input', '$input', '$way_to_pay')";
        mysqli_select_db($conn, $database);
        $datos = mysqli_query($conn, $consulta);
        echo "200";  
    }else{
        echo "el post no esta declarado, revisar el contenido de la variable post";
    }
?>

<!-- SELECT id_inventory, product.name_product, unit_type.name_unit, brend.name_brend, provider.name_provider, date, piece_quantity, unit_price, total_price, type_of_input.type_of_input, input.name_input, way_to_pay.way_to_pay FROM inventory JOIN product on inventory.product_id = product.id_product
JOIN unit_type on inventory.unit_type_id = unit_type.id_unit_type
JOIN brend on inventory.brend_id = brend.id_brend
JOIN provider on inventory.product_id = provider.id_provider
JOIN type_of_input on inventory.type_of_input_id = type_of_input.id_type_of_input
JOIN input on inventory.input_id = input.id_input
JOIN way_to_pay on inventory.way_to_pay_id = way_to_pay.id_way_to_pay -->