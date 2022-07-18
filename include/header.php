
<header class="header">
    <form action="../servidor/buscar.php" method="post" class="buscar">
        <input type="text" placeholder="Buscar ..." id="busqueda" onkeypress = "buscar();">
        <input type="button" value="Pacientes" class="btn_buscar"   id="buscar_paciente">
        <input type="button" value="Doctores" class="btn_buscar"    id="buscar_doctor">
        <input type="button" value="Inventario" class="btn_buscar"  id="buscar_inventario">
    </form>
    <h2 id="cargo"><?php echo $_SESSION['cargo']==1 ? 'Administrador': 'Recepcion'; ?></h2>
  </header>