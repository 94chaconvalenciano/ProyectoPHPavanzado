var nombre = document.getElementById("nombre").value;
var correo = document.getElementById("correo").value;
var fecha = document.getElementById("fecha").value;
var titulo = "Café Au Lait";
var texto1 = "Gracias por dejar su reseña.";
var texto2 = "Canjée este cupón por una bebida gratis en nuestra cafetería.";


function generarSKU() {

    codigo = Math.random();
    codigo = codigo * 10000000000;
    codigo = Math.floor(codigo);
    document.getElementById("codigo").value = codigo;

    JsBarcode("#barcode", codigo);
}


function guardarSKU() {

    logo = new Image();
    ruta = document.getElementById("barcode").getAttribute("src");
    logo.src = ruta;
    
    header = new Image();
    rutaheader = document.getElementById("headerpdf").getAttribute("src");
    header.src = rutaheader;

    pdf = new jsPDF();
    pdf.addImage(header, 'png', 0, 0, 210, 66);
    pdf.text(20, 70, titulo);
    pdf.text(20, 90, texto1);
    pdf.text(20, 100, texto2);
    pdf.text(20, 120, nombre);
    pdf.text(20, 130, correo);
    pdf.text(20, 140, fecha);
    pdf.addImage(logo, 'png', 55, 170, 100, 70);
    pdf.setFontSize(40);
    pdf.save(nombre + "-" + fecha + '.pdf');

}