var oilCanvas = document.getElementById("oilChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 10;

let ent=0;
let can=0;
let ret=0;



Ventas= [{Folio:'1',Nombre_Cliente:'Mark',Descripcion:'GND PEPE',Status_pago:'Pagado',Status_Orden:'Entregada'},
         {'Folio':'2','Nombre_Cliente':'Linda','Descripcion':'Ch Ita','Status_pago':'Falta Pago','Status_Orden':'Retrasada'},
         {'Folio':'3','Nombre_Cliente':'Carlos','Descripcion':'GND PEPE','Status_pago':'Cancelada','Status_Orden':'Cancelada'}];


console.log(Ventas);
 function actualizar(){
    $("#TV").html('');
    console.log("qsfqefqwefqwerfq");

    for(let i=0;i<Ventas.length;i++){
        if(Ventas[i].Status_Orden=="Entregada"){

            ent++;
        }else if(Ventas[i].Status_Orden=="Retrasada"){
            console.log("2");

        ret++;
        }else{
            console.log("3");

            can++;
        }

        let fila= "<tr><th scope="+'"row"'+">"+Ventas[i].Folio+ "</th><td>"+Ventas[i].Nombre_Cliente+"</td><td>"+Ventas[i].Descripcion+"</td><td>"+Ventas[i].Status_pago+"</td><td>"+Ventas[i].Status_Orden+"</td></tr>";
        console.log(fila);
        $("#TV").append(fila);
    }
    console.log(ent);

    console.log(can);
    console.log(ret);

}

function pastel(){
    var oilData = {
        labels: [
            "Entregadas",
            "Retrasadas",
            "Canceladas"
        ],
        datasets: [
            {
                data: [ent, can, ret],
                backgroundColor: [
                    "#5BC8AC",
                    "#FFFF00",
                    "#FF0000"
                ]
            }]
    };
    var pieChart = new Chart(oilCanvas, {
        type: 'pie',
        data: oilData
      });
}

$(document).ready(function(){
    actualizar();
    pastel();
});
