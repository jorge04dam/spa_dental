   <?php 
    if($_POST){
        header('Location: http://127.0.0.1/spa_dental/login.php');
    }
    ?>
    <?php include 'header.php'; ?>
        <div class="container">
        
        <div class="pendientes" id="tareas">
            <div class="cardTarea" id="cardRealizado cardTareas">Seguimiento a</div>
            <div class="cardTarea" id="cardRealizado cardTareas">Tarea 2</div>
            <div class="cardTarea" id="cardRealizado cardTareas">Tarea 3</div>
            <div class="cardTarea" id="cardenProceso cardTareas">Tarea 4</div>
            <div class="cardTarea" id="cardenProceso cardTareas">Tarea 1</div>
            <div class="cardTarea" id="cardenProceso cardTareas">Tarea 2</div>
            <div class="cardTarea" id="cardPendiente cardTareas">Tarea 3</div>
            <div class="cardTarea" id="cardPendiente cardTareas">Tarea 4</div>
           
        </div>
        <hr>
        
        
    </div>
    <div class="add">
        <img src="img/agregar1.png" alt="add-taks" >
    </div>
    <?php include '../include/library_js.php'; ?>

    <?php include '../include/footer.php'; ?>
    