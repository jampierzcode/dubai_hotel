$(document).ready(function () {
  $("#cat-habs-btn-add").click(() => {
    funcion = "crear_cat-habitacion";
    let categoria_nombre = $("#categoria-nombre").val();
    let categoria_precio = $("#categoria-precio").val();

    if (categoria_nombre && categoria_precio) {
      $.post(
        "../../controlador/UsuarioController.php",
        {
          funcion,
          categoria_nombre,
          categoria_precio,
        },
        (response) => {
          console.log(response);
          $("#categoria-nombre").val("");
          $("#categoria-precio").val("");
        }
      );
    } else {
      let template = "";
      if (!categoria_nombre) {
        template += "Falta registrar nombre, ";
      }
      if (!categoria_precio) {
        template += "Falta registrar precio";
      }
      console.log(template);
    }
  });
});
