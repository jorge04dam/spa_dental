   <?php 
    session_start();
    //se verifica que no haya una sesion activa, si hay una, no se permitira el acceso al login
    //¿no Hay una sesion activa o iniciada?
        if(empty($_SESSION['active'])){
            header('location: ../sistema/Bienvenida_admin.php');
        }
        include '../include/header.php';
        
    ?>
        
     

    <div class="container_inicio">
        <div class="barra_lateral">
            <h1 id="nav-lat">Spa Dental Lindavista</h1>
            <?php //include 'sidebar.php'; ?>
                
        </div>
        <div class="container_lateral">
        
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
           
        
        
    </div>
    <div class="add">
        <img src="../img/agregar1.png" alt="add-taks" >
    </div>
    <?php include '../include/footer.php'; ?>
    <?php include '../include/library_js.php'; ?>

    
    