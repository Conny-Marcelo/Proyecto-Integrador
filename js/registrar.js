$("#msgLogin").hide();
function registrar(){
    //u = document.getElementById("user").value;
    nombre = $("#user").val();
    apellido_pat = document.getElementById("apellido_pat").value;
    apellido_mat = document.getElementById("apellido_mat").value;
    nombre_usuario = document.getElementById("nombre_usuario").value;
    passwd = document.getElementById("passwd").value;
    confirmar_passwd = document.getElementById("confirma_passwd").value;
    fecha_nac = document.getElementById("fecha_nac").value;
    domicilio = document.getElementById("domicilio").value;
    edad = document.getElementById("edad").value;
    sexo = document.getElementById("sexo").value;
    correo = document.getElementById("correo").value;
    num_tel = document.getElementById("numero_tel").value;
    console.log("Hasta aqui todo bien");
    if (passwd == confirmar_passwd && nombre != "" && apellido_pat != "" && apellido_mat != "" && nombre_usuario != "" && passwd != "" && confirmar_passwd != "" && fecha_nac != "" && domicilio != "" && edad != "" && sexo != "" && correo != "" && num_tel != "") {
        $.get("registro.php",{n:nombre,ap:apellido_pat,am:apellido_mat,nu:nombre_usuario,p:passwd,cp:confirmar_passwd,fn:fecha_nac,d:domicilio,e:edad,s:sexo,c:correo,nt:num_tel}).done(function(datos){
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