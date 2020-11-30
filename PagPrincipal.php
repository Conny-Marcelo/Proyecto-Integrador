<?php
require_once 'seguridad.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/iconfont/material-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pagina_Principal</title>
</head>
<style>
    body {
        background-image: url(imagenes/PagPrincipal.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    footer {
        position: static;
    }

    .abs-center {
        display: flex;
        align-items: center;
        justify-content: left;
        min-height: 80vh;
    }

    .form {
        width: 350px;
    }

    #letra {
        font-style: normal;
        font-weight: 20;
        font-size: 45px;
    }

    .imp {

        width: 250px;
        height: 150px;
        margin: 10px;

    }
</style>

<body>
    <!-- El nav o barra de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="imagenes/Logo.png" width="30" height="30">
            Vale Cheezo
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="PagPrincipal.php"> Pizzas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="usuario.php"> Usuarios <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Pedidos.php"> Mi Orden <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.html"> Salir <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img  class="d-block w-100" src="imagenes/pm1.jpg" alt="First slide" width="670" height="260" data-toggle= "modal" data-target="#promo_semanal">
            </div>
            <div class="carousel-item ">
              <img class="d-block w-100" src="imagenes/ofg.png" alt="Second slide" width="250" height="260" data-toggle= "modal" data-target="#promo_semanal">
            </div>
            <div class="carousel-item ">
              <img class="d-block w-100" src="imagenes/pm4.jpg" alt="Third slide" width="250" height="260" data-toggle= "modal" data-target="#promo_semanal">
            </div>
          </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
        </div>

    <section class="container">
        <div class="row" style="color: ghostwhite;">
            <div class="col-3"><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mexicana
                <br><img src="imagenes/mexicana.jpeg" alt="" width="250px" height="150px">

                <img src="imagenes/buy.png" alt="" width="40px" height="40px" data-toggle= "modal" data-target="#Confirmar"
                    STYLE="position:absolute; top:175px; left:240px; visibility:visible z-index:1">
            </div>
            <div class="col-3"><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cuatro
                Quesos
                <br><img src="imagenes/4quesos.jpeg" alt="" width="250px" height="150px">
                <br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                    src="imagenes/buy.png" alt="" width="40px" height="40px" data-toggle= "modal" data-target="#Confirmar"
                    STYLE="position:absolute; top:175px; left:240px; visibility:visible z-index:1">
            </div>
            <div class="col-3"><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hawaiana
                <br><img src="imagenes/hawaiana.jpeg" alt="" width="250px" height="150px">
                <br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                    src="imagenes/buy.png" alt="" width="40px" height="40px" data-toggle= "modal" data-target="#Confirmar"
                    STYLE="position:absolute; top:175px; left:240px; visibility:visible z-index:1">
            </div>
            <div class="col-3"><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peperoni Especial
                <br><img src="imagenes/peperonies.jpeg" alt="" width="250px" height="150px">
                <br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                    src="imagenes/buy.png" alt="" width="40px" height="40px" data-toggle= "modal" data-target="#Confirmar"
                    STYLE="position:absolute; top:175px; left:240px; visibility:visible z-index:1">
                <p></p>
            </div>
            <div class="col-3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chiken Hawaiana
                <br><img src="imagenes/chikenhaw.jpeg" alt="" width="250px" height="150px">
                <br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                    src="imagenes/buy.png" alt="" width="40px" height="40px" data-toggle= "modal" data-target="#Confirmar"
                    STYLE="position:absolute; top:150px; left:240px; visibility:visible z-index:1">
            </div>
            <div class="col-3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carnes
                Frias
                <br><img src="imagenes/Carnesf.jpeg" alt="" width="250px" height="150px">
                <br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                    src="imagenes/buy.png" alt="" width="40px" height="40px" data-toggle= "modal" data-target="#Confirmar"
                    STYLE="position:absolute; top:150px; left:240px; visibility:visible z-index:1">
            </div>
            <div class="col-3" >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vegetariana
                <br><img src="imagenes/vegetariana.jpeg" alt="" width="250px" height="150px">
                <br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                    src="imagenes/buy.png" alt="" width="40px" height="40px" data-toggle= "modal" data-target="#Confirmar"
                    STYLE="position:absolute; top:150px; left:240px; visibility:visible z-index:1">
            </div>
            <div class="col-3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Super
                <br><img src="imagenes/super.jpeg" alt="" width="250px" height="150px">
                <br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                    src="imagenes/buy.png" alt="" width="40px" height="40px" data-toggle= "modal" data-target="#Confirmar"
                    STYLE="position:absolute; top:150px; left:240px; visibility:visible z-index:1">
            </div>
        </div>
    </section><br><br>
    <footer class="container-fluid">
        <div class="row bg-dark text-light">
            <div class="col">
                <p class="text-center">Copyright Vale Cheezo(c) 2020. Todos los derechos reservados. </p>
                <p class="text-center"><a href="mailto:enriqueblancaslopez.itsch@gmail.com">Webmaster</a></p>
            </div>
        </div>

 <!-- Es una ventana modal para editar -->
 <div class="modal fade" id="Confirmar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ordenar:</h5>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">perm_identity</i>
                                </div>
				</div>
                             <input type="text" name="user" id="nombrePizza" class="form-control" placeholder="Nombre Pizza">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">account_circle</i>
                                </div>
                            </div>
                            <input type="number" name="Nombre_usuario" id="cuantas" class="form-control"
                                placeholder="Cantidad de Pizzas">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">today</i>
                                </div>
                            </div>
                            <div class="form-row ">
                                         <div class="col-auto my-1">
                                           <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                           <select class="custom-select mr-sm-2" id="tamaño">
                                             <option selected>Chica</option>
                                             <option value="1">Mediana</option>
                                             <option value="2">Grande</option>
                                           </select>
                                         </div>
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">room</i>
                                </div>
                            </div>
                            <input type="text" name="Domicilio" id="domicilio" class="form-control"
                                placeholder="Domicilio">
                        </div>
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">smartphone</i>
                                </div>
                            </div>
                            <input type="text" name="Numero_tel" id="numero_tel" class="form-control"
                                placeholder="Numero Telefonico">
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" onclick="agregarCompra()" class="btn btn-primary"
                            data-dismiss="modal">Guardar</button>
                    </div>
                    </div>
            </div>
        </div>
        

<!-- Es una ventana modal para promos -->
<div class="modal fade" id="promo_semanal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Promociones semanales</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Está promoción solo es valida en mostrador.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button>     
        </div>
      </div>
    </div>
  </div>


    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validacion.js"></script>
    <script src="js/Chart.js"></script>
    <script src="js/miOrden.js"></script>
    <script src=></script>

</body>

</html>