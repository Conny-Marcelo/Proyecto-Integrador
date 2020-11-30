<?php
//require_once 'seguridad.php';
require_once 'conexion.php';

$con=conexion();

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

$cmd=$con->prepare("INSERT INTO registrar(nombre, apellido_pat, apellido_mat, nombre_usuario, passwd, confirmar_passwd, fecha_nac, domicilio, edad, sexo, correo, num_tel) VALUES(:n, :ap, :am, :nu, :p, :cp, :fn, :d, :e, :s, :c, :nt)");
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

$cmd->execute();


//$id=$con->lastInsertId();
if($cmd->rowCount()>0){
    echo json_encode(["resp"=>"si"]);
}else{
    echo json_encode(["resp"=>"no"]);
}

$nu = $_REQUEST["nu"];
$p = $_REQUEST["p"];
$cmd=$con->prepare("INSERT INTO entrar(nombre_usuario, passwd) VALUES(:nu, :p)");
$cmd->bindValue(':nu',$nu);
$cmd->bindValue(':p',$p);
$cmd->execute();