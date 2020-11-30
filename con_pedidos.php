<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con = conexion();

$cmd = $con->prepare("SELECT id_pedido, nombre, cuantas, tamano, domicilio, num_tel FROM pedido");
$cmd->setFetchMode(PDO::FETCH_ASSOC);
$cmd->execute();
$tabla = $cmd->fetchAll();
echo json_encode($tabla);