$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll > 20) {
        $("#logoheader").slideUp(500);
    } else {
        $("#logoheader").slideDown(500);
    }
});
$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll > 20) {
        $("#menu").css({
            backgroundColor: "#350f1a"
        }, 500);
        $("#blog")
        $(".linkmenu").css({
            color: "#fff"
        }, 500);
        $("#logoheader").slideUp(500);
        $("#contacto").css({
            backgroundColor: "#c1826a"
        });
        $("#blog").css({
            backgroundColor: "#f6ab2b"
        });
    } else {
        $("#menu").css({
            backgroundColor: "transparent"
        }, 500);
        $(".linkmenu").css({
            color: "#fff"
        }, 500);
        $("#logoheader").slideDown(500);
        $("#contacto").css({
            backgroundColor: "transparent"
        });
        $("#blog").css({
            backgroundColor: "transparent"
        });
    }
});
$(document).ready(function () {
    $("nav").click(function () {
        $("ul").toggle(500);

    });
});
$(window).scroll(function () {
    var altura = $(window).scrollTop();
    var contenido = $("#secondchild").offset();
    var contenido2 = $("#descrip").offset();
    var contenido3 = $("#materiaprima").offset();
    var contenido4 = $("#treserva").offset();
    var contenido5 = $("#googlemaps").offset();
    contenido = contenido.top;
    contenido2 = contenido2.top;
    contenido3 = contenido3.top;
    contenido4 = contenido4.top;
    contenido5 = contenido5.top;


    if (altura >= contenido) {
        $("#nuestrocafe > h1").fadeIn(500);
        $("#nuestrocafe > p").fadeIn(700);
    } else {
        $("#nuestrocafe > h1").fadeIn(500);
        $("#nuestrocafe > p").fadeOut(700);
    }


    if (altura >= contenido2) {
        $("#sobrenosotros").slideDown(800);
    } else {
        $("#sobrenosotros").slideUp(800);
    }


    if (altura >= contenido3) {
        $("#titledeu").slideDown(500);
        $("#pdeu").slideDown(800);

    } else {
        $("#titledeu").slideUp(500);
        $("#pdeu").slideUp(800);
    }



    if (altura >= contenido4) {
        $(".redes").show().animate({
            width: "30vh",
            display: "block"
        }, 8);
        $(".redes").show().animate({
            fontSize: "2.5vh"
        }, 8);
        $(".redes > img").show().animate(8);
    } else {
        $(".redes").hide().animate({
            width: "0vh",
            display: "none",
            color: "white"
        }, 8);
        $(".redes > img").hide().animate(8);
        $(".redes").show().animate({
            fontSize: "0"
        }, 8);
    }



    if (altura >= contenido5) {
        $("#imgcafeteria").fadeIn(800);
    } else {
        $("#imgcafeteria").fadeOut(800);
    }
});


