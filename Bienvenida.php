   <?php 
    if($_POST){
        header('Location: http://127.0.0.1/spa_dental/login.php');
    }
    ?>
    <?php 
        include 'header.php';
     
    ?>
        <div class="container">
              <h1>Bienvenida <?php echo $nom; ?></h1>
        </div>
    <?php include 'library.php'; ?>

    <?php include 'footer.php'; ?>
    