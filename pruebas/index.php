<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid</title>
   
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="grid-container">
  
  <header class="header">
    <div class="buscar">
        <input type="text" placeholder="Buscar.." id="busqueda">
        <input type="button" value="Buscar" class="btn_buscar">
    </div>
    <h2 id="cargo"><?php echo $_SESSION['cargo']==1 ? 'Administrador': 'Recepcion'; ?></h2>
  </header>



  <!-- <nav class="navbar"> -->
  <?php //include '../sistema/sidebar.php';?>
  <!-- </nav> -->
  <aside class="sidebar">
   <?php include '../sistema/sidebar.php';?>
  </aside>
  <article class="main">
    
    <?php 
    include '../servidor/connect.php';
    include '../sistema/sesiones.php'; ?>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus alias eum commodi necessitatibus, deserunt aut rerum maxime ullam quod. Molestiae voluptatum quo possimus in reprehenderit ipsa, cupiditate dolores accusamus explicabo.</h1>
    <hr>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus alias eum commodi necessitatibus, deserunt aut rerum maxime ullam quod. Molestiae voluptatum quo possimus in reprehenderit ipsa, cupiditate dolores accusamus explicabo.</h1>
    <hr>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus alias eum commodi necessitatibus, deserunt aut rerum maxime ullam quod. Molestiae voluptatum quo possimus in reprehenderit ipsa, cupiditate dolores accusamus explicabo.</h1>
    <hr>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus alias eum commodi necessitatibus, deserunt aut rerum maxime ullam quod. Molestiae voluptatum quo possimus in reprehenderit ipsa, cupiditate dolores accusamus explicabo.</h1>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus alias eum commodi necessitatibus, deserunt aut rerum maxime ullam quod. Molestiae voluptatum quo possimus in reprehenderit ipsa, cupiditate dolores accusamus explicabo.</h1>
    <hr>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus alias eum commodi necessitatibus, deserunt aut rerum maxime ullam quod. Molestiae voluptatum quo possimus in reprehenderit ipsa, cupiditate dolores accusamus explicabo.</h1>
    <hr>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus alias eum commodi necessitatibus, deserunt aut rerum maxime ullam quod. Molestiae voluptatum quo possimus in reprehenderit ipsa, cupiditate dolores accusamus explicabo.</h1>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus alias eum commodi necessitatibus, deserunt aut rerum maxime ullam quod. Molestiae voluptatum quo possimus in reprehenderit ipsa, cupiditate dolores accusamus explicabo.</h1>
    <hr>
  </article>
  <footer class="footer">
        <h2>Spa dental lindavista 2022</h2>
</footer>
</body>
</html>