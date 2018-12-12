$(document).ready(function(){

    //Validación campo Nombre

    $("#nombre").click(function(){
    $("#alertName").slideDown();
    $("#alertCorreo , #alertMensaje").slideUp(200);
    });

    //Validación campo Correo
    $("#email").click(function(){
    $("#alertCorreo").slideDown();
    $("#alertName , #alertMensaje").slideUp(200);
    });

    //Validación campo Mensaje
    $("#mensaje").click(function(){
    $("#alertMensaje").slideDown();
    $("#alertName , #alertCorreo").slideUp(200);
    });

    //Ejecutar la función

    $("#enviar").click(function(event){
        var nombre = $("#nombre").val();
        var correo = $("#email").val();
        var mensaje = $("#mensaje").val();
               
                    
                    
        if( nombre == 0 || correo == 0 || mensaje == 0){
        $("#alertError").slideDown();
        }else{
        $("#formulario").slideUp();
        $("#gracias").slideDown();
        }

        event.preventDefault();
        });








});










