orden = [{id_pedido:'1',nombre:'Hawaiana',cuantas:'5',tamano:'chica',domicilio:'jalisco #34', num_tel:'786134405'}];
idaeliminar = 0;
consulta();
console.log(orden)
function actualizar(){
    $("#tablaPedidos").html('');
    for(let i = 0 ; i < orden.length; i++){
        let fila = "<tr><td >" + orden[i].id_pedido + "</td>";
        fila+="<td>" + orden[i].nombre + "</td><td>" + orden[i].cuantas + "</td>";
        fila+="<td>" + orden[i].tamano + "</td><td>" + orden[i].domicilio +"</td>";
        fila+="<td>" + orden[i].num_tel + "</td>";
        fila += "<td style='font-size:75%';><button class='btn btn-danger btn-sm' onclick='eliminaOrden("+ orden[i].id_pedido +");' data-toggle='modal' data-target='#eliminaPedido'>";
        fila += "<i class='material-icons align-middle'>cancel</i></button></td></tr>";
        console.log(fila);
        $("#tablaPedidos").append(fila);
    }
}

function agregarCompra() {
    //u = document.getElementById("user").value;
    nombre = $("#nombrePizza").val();
    cuantas = document.getElementById("cuantas").value;
    tamaño = document.getElementById("tamaño").value;
    domicilio = document.getElementById("domicilio").value;
    num_tel = document.getElementById("numero_tel").value;
    console.log("Hasta aqui todo bien");
    if (nombre != "" && cuantas != "" && tamaño != "" && domicilio != "" && num_tel != "") {
        $.get("add_orden.php",{n:nombre,c:cuantas,t:tamaño,d:domicilio,nt:num_tel}).done(function(datos){
            console.log(datos);
             if(datos.resp == "si"){
                 console.log("si");
                 //location.href="PagPrincipal.php";
             }else{
                 console.log("no");
                // $("#msgLogin").fadeIn(1000);
                // $("#msgLogin").html("Error de usuario/contraseña");
             }
          });
    }else{
        console.log("Ingresa las mismas contraseñas");
        $("#msgLogin").fadeIn(1000);
        $("#msgLogin").html("Error al ingresar los datos");
    }

}

function eliminaOrden(id_pedido){
    idaeliminar = id_pedido;
}

function confirmaEliminar(){
    console.log("Si trata de eliminar")
    $.getJSON("del_pedido.php",{id_pedido:idaeliminar}).done(function(datos){
        if(datos.resp == "si"){
            consulta();
        }else{
            $('.toast').toast('show')
        }
    });
}

/* Conexion a base de datos */
/* Consulta */
function consulta(){
    $.getJSON("con_pedidos.php").done(function(datos){
        console.log(datos);
        orden = datos;
        actualizar();
    }).fail(function(e){
        console.log(e);
    });
}