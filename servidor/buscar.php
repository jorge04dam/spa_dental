<?php 
    include 'connect.php';
    if($_POST){
        $busqueda = $_POST['busqueda'];
        // echo $busqueda;
        

        $consulta = "SELECT * FROM `patient_prueba` where `name` = '$busqueda'";
         
        mysqli_select_db($conn, $database);
        $datos = mysqli_query($conn, $consulta);

        $resultado = mysqli_num_rows($datos);
        if(!$resultado > 0){
            echo "No se ha encontrado ningun resultado para esa busqueda.";
            exit();
        }
        // $datos1 = json_encode($datos);

        while ($file = mysqli_fetch_array($datos)) {
            // var_dump($file);
            $jsonn = json_encode($file);
            
        }

        var_dump($jsonn);
        
        exit();
?>

   



<?php
    }else{
        echo "no hola";
    }
    
?>
  <!-- <table> -->
        <!-- <thead> -->
            <!-- <tr> -->
                <!-- hola -->
            <!-- </tr> -->
        <!-- </thead> -->
    
            <?php
                // while ($file = mysqli_fetch_array($datos)) {
            ?>
                <!-- <tbody> -->
                    <!-- <tr> -->
                        <?php 
                            // echo "hola que pasa";
                            // echo $file['nickname'];
                        ?>
                    <!-- </tr> -->
                <!-- </tbody> -->
            <?php
               // }
            ?>
    <!-- </table> -->