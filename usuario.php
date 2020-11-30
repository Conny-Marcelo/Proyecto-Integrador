<?php
require_once 'seguridad.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="css/iconfont/material-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    footer {
        
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px;
    } 
table{
position:relative;
margin:auto;
width:100%;
right:5%;

}
table thead tr th{
padding:10x;
}
table body tr td{
padding:10px;
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
                    <a class="nav-link" href="Pedidos.php"> Mi Orden <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.html"> Salir <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="usuario.php"> Usuarios <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
        <div class="container mt-5" >
            <div style="text-align:center; ">
            <div class="row">
                <div class="col">
                    <table class="table table-hover table-dark" >
                        <thead>
                            <tr> 
                                <th >Id</th>
                                <th>Nombre</th>
                                <th>Ap.Paterno</th>
                                <th>Ap.Materno</th>
                                <th>Usuario</th>
                                <th>Password</th>
                                <th>Nacimiento</th>
                                <th>Domicilio</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th style="width:200px"; "height:200px">...</th>
                                <th style="width:200px"; "height:200px">...</th>
                            </tr>
                        </thead>
                        <tbody id="tablaUsuarios">
                            <tr>
                                <td style="font-size:75%";>1</td>
                                <td style="font-size:75%";>Enrique</td>
                                <td style="font-size:75%";>Blancas</td>
                                <td style="font-size:75%";>Lopez</td>
                                <td style="font-size:75%";>Kike</td>
                                <td style="font-size:75%";>123</td>
                                <td style="font-size:75%";>2000-02-12</td>
                                <td style="font-size:75%";>Jalisco #39</td>
                                <td style="font-size:75%";>20</td>
                                <td style="font-size:75%";>Hombre</td>
                                <td style="font-size:75%";>enrique@gmail.com</td>
                                <td style="font-size:75%";>443651180</td>
                                <td style="font-size:75%";>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modificaUsuario" >
                                        <i class="material-icons align-middle">edit</i>
                                    </button>
                                </td>
                              <td style="font-size:75%";>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminaUsuario">
                                        <i class="material-icons align-middle">cancel</i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>
        <!-- Es una ventana modal para editar -->
        <div class="modal fade" id="modificaUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Modal Nombre -->
                    <div class="modal-body">
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">perm_identity</i>
                                </div>
				</div>
                             <input type="text" name="user" id="user" class="form-control" placeholder="Nombre">
                            
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">short_text</i>
                                </div>
                            </div>
                            <input type="text" name="apellido_pat" id="apellido_pat" class="form-control"
                                placeholder="Apellido Paterno">
                            <input type="text" name="apellido_mat" id="apellido_mat" class="form-control"
                                placeholder="Apellido Materno">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">account_circle</i>
                                </div>
                            </div>
                            <input type="text" name="Nombre_usuario" id="nombre_usuario" class="form-control"
                                placeholder="Nombre de Usuario">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">https</i>
                                </div>
                            </div>
                            <input type="password" name="password" id="passwd" class="form-control"
                                placeholder="Contraseña">
                            <input type="password" name="Confirma_password" id="confirma_passwd" class="form-control"
                                placeholder="Confirmar Contraseña">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">today</i>
                                </div>
                            </div>
                            <input type="text" name="fecha_nac" id="fecha_nac" class="form-control"
                                placeholder="Fecha de Nacimiento (AAAA/MM/DD)">
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
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">assignment_ind</i>
                                </div>
                            </div>
                            <input type="text" name="Edad" id="edad" class="form-control" placeholder="Edad">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">wc</i>
                                </div>
                            </div>
                            <input type="text" name="Sexo" id="sexo" class="form-control" placeholder="Sexo">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">contact_mail</i>
                                </div>
                            </div>
                            <input type="text" name="Correo" id="correo" class="form-control"
                                placeholder="Correo Electronico">
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
                        <button type="button" onclick="guardaCambios()" class="btn btn-primary"
                            data-dismiss="modal">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Es una ventana modal para eliminar -->
        <div class="modal fade" id="eliminaUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>¿Esta seguro de eliminar al Usuario?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" onclick="confirmaEliminar()" class="btn btn-primary"
                            data-dismiss="modal">Si</button>
                    </div>
                </div>
            </div>
        </div>
    <footer class="container-fluid mt-2">
        <div class="row bg-dark text-light">
            <div class="col">
                <p class="text-center">Copyright Vale Cheezo(c) 2020. Todos los derechos reservados. </p>
                <p class="text-center"><a href="mailto:BenjaminRiveraPerez.itsch@gmail.com">Webmaster</a></p>
            </div>
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/usuarios.js"></script>
</body>

</html>