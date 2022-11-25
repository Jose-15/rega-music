
<header id="home">
    <nav class="nav">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#!" class="brand-logo brand">REGA MUSIC</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down menu">
          <?php
          session_start();
          if($_SESSION['email']){
        ?>
          <li><a href="carro.php"  category="all">Todo</a> </li>
          <?php
            $query = mysqli_query($conexion, "SELECT * FROM categorias");
            while ($data = mysqli_fetch_assoc($query)) { ?>
            <li><a href="#"  class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a></li>
          <?php } ?>
          <li><a href="#" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a></li>
				  <li><a href="../../config/cerrar-sesion.php" ><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
			    <?php
            }else{
          ?>
            <li><a href="#inicio">Home</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#galeria">Galeria</a></li>
            <li><a href="#products">Productos</a></li>
            <li><a href="#politicas">Politicas</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><a href="view/pantallas/login.php"> Iniciar Sesion</a></li>
            <li><a href="view/pantallas/register.php">Registrarte</a></li>
            <?php }?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <ul class="sidenav" id="mobile-demo">
  <?php
          session_start();
          if($_SESSION['email']){
        ?>
          <li><a href="carro.php"  category="all">Todo</a> </li>
          <?php
            $query = mysqli_query($conexion, "SELECT * FROM categorias");
            while ($data = mysqli_fetch_assoc($query)) { ?>
            <li><a href="#"  class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a></li>
          <?php } ?>
          <li><a href="carrito.php" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a></li>
				  <li><a href="../../config/cerrar-sesion.php" ><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
			    <?php
            }else{
          ?>
    <li><a href="#inicio">Home</a></li>
      <li><a href="#nosotros">Nosotros</a></li>
      <li><a href="#galeria">Galeria</a></li>
      <li><a href="#products">Productos</a></li>
      <li><a href="#politicas">Politicas</a></li>
      <li><a href="#contacto">Contacto</a></li>
      <li><a href="view/pantallas/login.php"> Iniciar Sesion</a></li>
      <li><a href="view/pantallas/register.php">Registrarte</a></li>
      <?php }?>
  </ul>