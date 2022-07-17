<?php 
    include 'connect.php';
    if($_POST){
        $busqueda = $_POST['busqueda'];
        // echo $busqueda;
        

        $consulta = "SELECT * FROM `patient_prueba` where `name` LIKE '%$busqueda%'";
         
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
            echo $file['name'] . "<br>";
            
        }

       
        
        
?>

   



<?php
    }else{
        echo "no hola";
    }
    
?>
  