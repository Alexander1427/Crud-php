function Registrar_producto() {

    var formData = new FormData();
    var nombre = $("#nombre").val();
    var descripcion = $("#descripcion").val();
    var precio = $("#precio").val();
    var cantidad = $("#cantidad").val();

    formData.append("nombre", nombre);
    formData.append("descripcion", descripcion);
    formData.append("precio", precio);
    formData.append("cantidad", cantidad);



    $.ajax({
        //url: "https://www.esen.edu.sv/esen_pwa/ajax/registro.php",
         url: "server/ingreso.php",
        type: "post",
        data: formData,
        contentType: false,
        processData: false,

        success: function(result) {

            Swal.fire(
                'Registro completpo',
                'Producto agregado',
                'success'
              )
        
        },
    });


}