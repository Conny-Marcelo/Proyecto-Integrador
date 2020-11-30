menu = [{id:'1','nombre_usuario':nombre,'passwd':password,'tipo_usuario':precio}];

menId = 2;
promoId=1;
idaeliminar = 0;
idaeditar = 0;

actualizar();
console.log(menu);

function agregarpromo(){
    let prom = $("#namePr").val();
    let precio=$("#precio").val();
    let descripcion=$("#Pizzas").val();
    menId ++;
    nuevaprom = {'id':menId+" ",'nombre':prom,'descripcion':descripcion,'precio':precio+""};
    menu.push(nuevaprom);
    console.log(menu);
    actualizar();
}

function actualizar(){
    $("#tablamenu").html('');
    for(let i = 0 ; i < menu.length; i++){
        let fila = "<tr><td>" + menu[i].id + "</td><td>" + menu[i].prom + "</td>"
        + "</td><td>" + menu[i].descripcion+ "</td>"+ "</td><td>"+ menu[i].precio+ "</td></tr>"
       $("#tablamenu").append(fila);
    }
    
}


function eliminarTema(idpi){
    idaeliminar = idpi;
}

function confirmaEliminar(){
    for(let i = 0 ; i < menu.length; i++){
        if(menu[i].id==idaeliminar){
            menu.splice(i,1);
            break;
        }
    }
    actualizar();
}

