<?php 
    if($_POST){
        header('Location: http://127.0.0.1/spa_dental/login.php');
    }
    ?>
    <?php 
        include 'header.php';
     
    ?>
        <div class="container">
              <h1>Bienvenida <?php echo "recepción en turno"; ?></h1>
        </div>
        <?php include '../include/library_js.php'; ?>

        <?php include '../include/footer.php'; ?>