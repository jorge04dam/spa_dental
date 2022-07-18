<link rel="stylesheet" href="../pruebas/css/siderbar-prueba.css">
<ul>
    <br>
    <h3 style="color: white"><?php echo $_SESSION['nickname']; ?></h3>
    <br>
    <li>
        <details>
            <summary class="separacion">
                Administrador
            </summary>
            <a href="bienvenida.php" class="separacion sub-separacion">Inicio</a> 
            <a href="#" class="separacion sub-separacion">Ver usuarios</a>
            <a href="#" class="separacion sub-separacion">Crear usuario</a>
            
        </details>
        
    </li>
    <hr>
    <li>
        <details>
            <summary class="separacion">
                Recepción
            </summary> 
            <a href="tablero.php" class="separacion sub-separacion">Tablero del día</a>
            <a href="#" class="separacion sub-separacion">Mensajes</a>
        </details>
        
    </li>
    <hr>
    <li>
        <details>
            <summary class="separacion">
                Paciente
            </summary> 
            <a href="#" class="separacion sub-separacion">Agregar</a>
            <a href="#" class="separacion sub-separacion">Nota medica</a>
            <a href="#" class="separacion sub-separacion">Expediente</a>
        </details>
        
    </li>
    <hr>
    <li>
        <details>
            <summary class="separacion">
                Doctor
            </summary> 
            <a href="#" class="separacion sub-separacion">Agregar</a>
            <a href="#" class="separacion sub-separacion">Actividad</a>
            <a href="#" class="separacion sub-separacion">Reporte</a>
        </details>
        
    </li>
    <hr>
    <li>
        <details>
            <summary class="separacion">
                Inventario
            </summary> 
            <a href="#" class="separacion sub-separacion">Agregar</a>
            <a href="inventario.php" class="separacion sub-separacion">Movimientos</a>
        </details>
        
    </li>
    <hr>
    <li>
        <details>
            <summary class="separacion">
                Facturas
            </summary> 
            <a href="#" class="separacion sub-separacion">Agregar</a>
            <a href="#" class="separacion sub-separacion">Movimientos</a>
        </details>
        
    </li>
    <hr>
    <a id="usuario_sesion" class="nav-link">Cerrar Sesion</a>
</ul>