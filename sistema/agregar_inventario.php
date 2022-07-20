<link rel="stylesheet" href="../pruebas/css/inventory_add.css">
<form action="../servidor/agregar_insumo.php" method="post" id="inventory_add">
    <select name="" id="product" placeholder="marca">
        <option value="0">producto</option>
        <option value="1">Guantes</option>
        <option value="2">Cubrebocas</option>
    </select>
    <select name="" id="brend" placeholder="marca">
        <option value="0">marca</option>
        <option value="1">kirkland</option>
        <option value="2">Ambiderm</option>
        <option value="3">Génerico</option>
    </select>
    <select name="" id="provider" >
        <option value="0">Proveedor</option>
        <option value="1">Costco</option>
        <option value="2">Depósito Villa</option>
        <option value="3">Similares</option>
        <option value="4">Dental Moderna</option>
        <option value="5">Depósito Xola</option>
        <option value="6">Ana Maria Gonzalez</option>
    </select>
    
    <input type="date" id="fecha" placeholder="fecha">
    <input type="text" id= "piezas" placeholder="cantidad en pzs">
    <input type="text" id= "precio_total" placeholder="precio total">
    <p id="precio_unitario" onclick = "unitario()">precio unitario</p>
    
    <select name="" id="tipo_insumo" >
        <option value="0">Tipo insumo</option>
        <option value="1">Consumible</option>
        <option value="2">instrumental</option>
    </select>
    
    <select name="" id="insumo" >
        <option value="0">Insumo</option>
        <option value="1">Dental</option>
        <option value="2">Limpieza</option>
        <option value="3">Papeleria</option>
    </select>
    <select name="" id="forma_pago" >
        <option value="0">Forma de pago</option>
        <option value="1">Efectivo</option>
        <option value="2">Tarjeta de débito</option>
        <option value="3">Transferencia</option>
        <option value="4">Tarjeta de crédito</option>
    </select>
    <input type="button" value="Guardar insumo" id="btn_guardar_insumo">
</form>