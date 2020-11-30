productos=[{'nom':'Hawaiana','desc':'Incluye pinia y jamon','id':'1','precio':'150'},
{'nom':'Peperoni','desc':'Cubierta de peperoni','id':'2','precio':'150'}]; 

prodId=2;
console.log(productos);
function agregarProducto(){
   let nom=$("#nprod").val();
   let desc=$("#dprod").val();
prodId ++;
nuevoProd={'nom':nom,'desc':desc+"",'id':prodId+""}
productos.push(nuevoProd)
console.log(productos);
actualizar();

}

function actualizar(){

    $("#tabp").html('');
    for(let i=0; i<productos.length; i++){
        let fila="<tr><td>"+productos[i].nom+"</td><td>"+productos[i].desc+"</td><td>"+productos[i].id+"</td></tr>";
        $("#tabp").append(fila);
    }
}

function enc(){
    let encontrar=$("#iden").val();
    $("#tabp").html('');
    for(let i=0; i<productos.length; i++){
        if(productos[i].id==encontrar){
            let fila="<tr><td>"+productos[i].nom+"</td><td>"+productos[i].desc+"</td><td>"+productos[i].id+"</td></tr>";
        $("#tabp").append(fila);
        }
    }
}
function edel(){
    let encontrar=$("#pi").val();
    
    for(let i=0; i<productos.length; i++){
        if(productos[i].id==encontrar){
            $("#dprod2").html(productos[i].desc);       
        $("#nom2").val(productos[i].nom+"");
        $("#pi").val(productos[i].id);
        }
    }
}
function ed(){
    let nom2= $("#nom2").val();
    let dprod2= $("#dprod2").val();
    let pi=$("#pi").val();
    for(let i=0; i<productos.length; i++){
        if(productos[i].id==pi){
            productos[i].nom=null;
            productos[i].desc=null;
            productos[i].id=null;
        }
    }
    nuevoProd={'nom':nom2,'desc':dprod2+"",'id':pi+""}
productos.push(nuevoProd)
console.log(productos);
actualizar();

}