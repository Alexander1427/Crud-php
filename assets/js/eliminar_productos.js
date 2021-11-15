function Eliminar_producto() {

    var formData = new FormData();
    var id = $("#id").val();

    formData.append("id", id);
  
    $.ajax({
        //url: "https://www.esen.edu.sv/esen_pwa/ajax/registro.php",
         url: "../server/delete_productos.php",
        type: "post",
        data: formData,
        contentType: false,
        processData: false,

        success: function(result) {
            
          
        },

    });


}


function btneliminar() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: 'Deseas eliminar este producto?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, Eliminar',
        cancelButtonText: 'No, Cancelar',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
            Eliminar_producto();
          swalWithBootstrapButtons.fire(
            'Borrado',
            'El archivo ha sido eliminado',
            'success'
          )
          setTimeout(() => {
            window.location.href = "index.php";
          }, 1000);
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
  
        }
      })
}