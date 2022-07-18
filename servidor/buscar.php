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
        echo "<h3>Resultados de la busqueda</h3>";
        echo "
        <table>
            <thead style='background: rgba(155,155,155,0.5);'>
             <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>    
                </tr>
            
            </thead>";
        while ($file = mysqli_fetch_array($datos, MYSQLI_ASSOC)) {
            // var_dump($file);
           
            echo "
            <tbody>

                <tr>
                    <th>".$file['name']."</th>
                    <th>".$file['lastname']."</th>
                    <th>".$file['lastname2']."</th>    
                </tr>
            </tbody>
        
            ";
            
        }
        echo "</table>";
       
        
        
?>

<?php
    }else{
        echo "no hola";
    }
    
?>
  