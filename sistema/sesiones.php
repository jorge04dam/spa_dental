<div class="container_inicio">
           <div class="barra_lateral">
                <h1 id="nav-lat">Spa Dental Lindavista</h1>
                <?php //include 'sidebar.php'; ?>
                
           </div>
           <div class="container_lateral">
                <h2>
                    Sesiones activas:
                </h2>
                <?php
                    $consulta = "SELECT *  FROM `login` where `status` = '1' ";
                    // WHERE `nickname` = '$nom'

                    mysqli_select_db($conn, $database);
           
                    $datos= mysqli_query($conn, $consulta);
                ?>
                <table>
                    <!-- <caption>Ejemplo de tabla</caption> -->
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Estado</th>
                            <th>Cargo</th>
                        </tr>
                    </thead>
               <?php
                    while ($fila = mysqli_fetch_array($datos)){
                   // echo "<p>";
                   // echo $fila ["id"];
                   // echo "-"; // un separador
                   // echo $fila["name"];
                   // echo "-"; // un separador
                   // echo $fila ["nickname"];
                   // echo "-"; // un separador
                   // echo $fila["status"];
                   // echo "</p>";
                   // echo "los datos son correctos";
                   ?>
                  
                <tbody>
                    <tr>
                       <td><?php echo $fila ["id"];  ?></td>
                       <td><?php echo $fila ["name"];  ?></td>
                       <td><?php echo $fila ["nickname"];  ?></td>
                       <td><?php 
                       if($fila ["status"] == 1){
                           echo "Activo";
                       }else{
                       echo "Inactivo"; 
                       } ?>
                       </td>
                       <td><?php 
                       if($fila ["cargo_id"] == 1){
                           echo "Administrador";
                       }else{
                       echo "Recepción"; 
                       } ?>
                       </td>
                    </tr>
                   
                </tbody>
           
                <?php    }
                ?>
           </table>
           </div>
           
       </div>