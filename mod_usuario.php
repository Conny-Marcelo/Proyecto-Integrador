<?php
//require_once 'seguridad.php';
require_once 'conexion.php';
$con = conexion();
$id = $_REQUEST["id_usuario"];

$n = $_REQUEST["n"];
$ap = $_REQUEST["ap"];
$am = $_REQUEST["am"];
$nu = $_REQUEST["nu"];
$p = $_REQUEST["p"];
$cp = $_REQUEST["cp"];
$fn = $_REQUEST["fn"];

$d = $_REQUEST["d"];
$e = $_REQUEST["e"];
$s = $_REQUEST["s"];
$c = $_REQUEST["c"];
$nt = $_REQUEST["nt"];

$cmd = $con->prepare("UPDATE registrar SET nombre=:n, apellido_pat=:ap, apellido_mat=:am, nombre_usuario=:nu, passwd=:p, confirmar_passwd=:cp, fecha_nac=:fn, domicilio=:d, edad=:e, sexo=:s, correo=:c, num_tel=:nt WHERE id_usuario=:id_usuario");

$cmd->bindValue(':n',$n);
$cmd->bindValue(':ap',$ap);
$cmd->bindValue(':am',$am);
$cmd->bindValue(':nu',$nu);
$cmd->bindValue(':p',$p);
$cmd->bindValue(':cp',$cp);
$cmd->bindValue(':fn',$fn);
$cmd->bindValue(':d',$d);
$cmd->bindValue(':e',$e);
$cmd->bindValue(':s',$s);
$cmd->bindValue(':c',$c);
$cmd->bindValue(':nt',$nt);

$cmd->bindValue(':id_usuario',$id);
$cmd->execute();

if($cmd->rowCount() > 0)
    echo json_encode(["resp"=>"si"]);
else
    echo json_encode(["resp"=>"no"]);