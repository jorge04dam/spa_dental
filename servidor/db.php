<?php
 include 'connect.php';
 session_start();
if($_POST){
   
    $nom    =  $_POST["nombre"];
    $pass   =  $_POST["contraseña"];
    $estado = "sesion_no_iniciada";
    
    $consulta = "SELECT *  FROM `login` WHERE `nickname` = '$nom'";

    mysqli_select_db($conn, $database);

    $datos= mysqli_query($conn, $consulta);

    // $resultado = mysqli_num_rows($datos);

	// 		if($resultado > 0)
	// 		{
	// 			$data = mysqli_fetch_array($datos);
	// 			$_SESSION['active']     = true;
	// 			$_SESSION['id']         = $data['id'];
	// 			$_SESSION['name']       = $data['name'];
	// 			$_SESSION['nickname']   = $data['nickname'];
	// 			$_SESSION['status']     = $data['status'];
	// 			$_SESSION['cargo']      = $data['cargo_id'];

	// 			header('location: ../sistema/Bienvenida_admin.php');
	// 		}else{
	// 			// $alert = 'El usuario o la clave son incorrectos';
	// 			session_destroy();
	// 		}
  
    while ($fila = mysqli_fetch_array($datos)){
        
        if($nom == $fila["nickname"] && $pass == $fila["password"]){
            
            // echo "<p>";
            // echo $fila ["id"];
            // echo "-"; // un separador
            // echo $fila["name"];
            // echo "-"; // un separador
            // echo $fila ["nickname"];
            // echo "-"; // un separador
            // echo $fila["password"];
            // echo "</p>";
            // echo "los datos son correctos";
            $_SESSION['active']     = true;
            // 			$_SESSION['id']         = $data['id'];
            // 			$_SESSION['name']       = $data['name'];
            $_SESSION['nickname']   = $fila['nickname'];
            $_SESSION['status']     = $fila['status'];
            $_SESSION['cargo']      = $fila['cargo_id'];
           if($fila["status"] == 0){
                if($fila["cargo_id"] == 1){
                    $actualizar = "UPDATE `login` SET `status`='1' WHERE `nickname`= '$nom'";
                    mysqli_query($conn, $actualizar);
                    $_SESSION['active'] = true;
                    $estado = "iniciando_sesion_admin";
                   
                    echo $estado;
                }elseif ($fila["cargo_id"] == 2) {
                    $actualizar = "UPDATE `login` SET `status`='1' WHERE `nickname`= '$nom'";
                    mysqli_query($conn, $actualizar);
                    $_SESSION['active'] = true;
                    $estado = "iniciando_sesion_recep";
                    
                    echo $estado;
                }else {
                    echo "el cargo no existe";
                }
                
                
           }else{
            $estado = "sesion_iniciada";
            echo $estado;
           }
        }else{
            echo $estado;  
        }
    
    }
   
      // cierre de la conexion a la base de datos
      mysqli_close($conn);

}else{
    header('Location: http://127.0.0.1/spa_dental/index.php');
}

?>
