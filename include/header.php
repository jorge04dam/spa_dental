<header class="header">
    <form action="../servidor/buscar.php" method="post" class="buscar">
        <input type="text" placeholder="Buscar ..." id="busqueda">
        <input type="button" value="Pacientes" class="btn_buscar">
        <input type="button" value="Doctores" class="btn_buscar">
        <input type="button" value="Inventario" class="btn_buscar">
    </form>
    <h2 id="cargo"><?php echo $_SESSION['cargo']==1 ? 'Administrador': 'Recepcion'; ?></h2>
  </header>