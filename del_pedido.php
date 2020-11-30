<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con = conexion();
$id = $_REQUEST["id_pedido"];
$cmd = $con->prepare("DELETE FROM pedido WHERE id_pedido=:id_pedido");
$cmd->bindValue(':id_pedido',$id);
$cmd->execute();

if($cmd->rowCount() > 0)
    echo json_encode(["resp"=>"si"]);
else
    echo json_encode(["resp"=>"no"]);