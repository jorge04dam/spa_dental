<?php
    include 'connect.php';
    echo "fuera del post";
    if ($_POST) {
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
        $user_online    = $_POST['user_online'];
        $movement       = $_POST['movement'];
    
        echo "dentro del post";
        
    }
    
    
?>











<!-- INSERT INTO `login` (`id`, `name`, `nickname`, `password`, `status`, `cargo_id`) VALUES (NULL, 'jorge', 'jorgedam', '123', b'0', '1'), (NULL, 'raul', 'rulo', '123', b'0', '2'); -->