<?php require_once "../../config/conexion.php";
require_once "../../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Carrito de Compras</title>
    <link href="../../assets/css/styles.css" rel="stylesheet" />
    <link href="../../assets/css/estilos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AderMWdqmIGO0zQCwjDKOhyOR9tAacSE0rgav2eC21widSOWYHXQprxTU-n5DFMeRdCub4i5mJmWzGLC&currency=MXN&intent=capture&enable-funding=venmo" data-sdk-integration-source="integrationbuilder"></script>


</head>
</style>
<body>
    <!-- Navigation-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="carro.php">REGA MUSIC</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="carro.php"><span class="glyphicon glyphicon-shopping-cart"></span> Seguir Comprando</a></li>
      <li><a href="../../config/cerrar-sesion.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>
<!--carrucel-->


    <!--tabla-->

    <br><br><br>
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody id="tblCarrito">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5 ms-auto">
                    <h4>Total a Pagar: <span id="total_pagar">0.00</span></h4>
                    <div class="d-grid gap-2">
                        <div id="paypal-button-container"></div>
                        <button class="btn btn-warning" type="button" id="btnVaciar">Vaciar Carrito</button>
                        <?php
                            @include("../../view/auth/pago.php")
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
 
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../../assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&locale=<?php echo LOCALE; ?>"></script>
    <script src="../../assets/js/scripts.js"></script>
    <script src="../../assets/js/mostrarcarro.js"></script>

    <?php
        @include("../../view/plantillas/foter.php")
    ?>


</body>

</html>