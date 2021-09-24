function Registrar_usuario() {

    var formData = new FormData();
    var nombre = $("#nombre").val();
    var email = $("#email").val();
    var password = $("#password").val();

    formData.append("nombre", nombre);
    formData.append("email", email);
    formData.append("password", password);



    $.ajax({
        //url: "https://www.esen.edu.sv/esen_pwa/ajax/registro.php",
         url: "server/registro.php",
        type: "post",
        data: formData,
        contentType: false,
        processData: false,

        success: function(result) {

            Swal.fire(
                'Registro completpo',
                'Tu usuario se creo correctamente',
                'success'
              )
        
        },
    });


}