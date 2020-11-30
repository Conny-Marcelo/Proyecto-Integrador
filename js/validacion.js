$("#msgLogin").hide();
function login(){
    //u = document.getElementById("user").value;
    u = $("#user").val();
    p = document.getElementById("pass").value;
    tu = document.getElementById("tipouser").value;
    console.log(tu);
    $.getJSON("Login.php",{user:u,pass:p}).done(function(datos){
        console.log(datos);
        if(datos.resp == "si"){
            if(tu=="Empleado"){
                location.href="PagPrincipal.php";
            }else if (tu=="Cliente") {
                location.href="PagPrincipalCli.php";
            }
            
        }else{
            $("#msgLogin").fadeIn(1000);
            $("#msgLogin").html("Error de usuario/contraseña");
        }
     });
}