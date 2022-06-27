<?php include 'header.php'; ?>        
        <!-- <a href="#"><img src="img/logo-150x150.png" class="img_logo2" alt=""></a> -->
        <!-- <h1>Spa Dental Linda Vista</h1> -->
        <!-- </div> -->
    <?php 
    if(!$_POST){
        header('Location: http://127.0.0.1/spa_dental/login.php');
    }
    ?>
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
    <?php include 'library.php'; ?>
   <script src="js/app.js"></script>
   <?php include 'footer.php'; ?>
