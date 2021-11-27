$(document).ready(function () {
  var funcion = "";
  buscar_cat_hab();
  buscar_piso_hab();

  function buscar_piso_hab() {
    funcion = "buscar_piso_hab";
    $.post(
      "../../controlador/UsuarioController.php",
      { funcion },
      (response) => {
        let template = "";
        if (response.trim() == "Falta crear pisos") {
          template += `
        <option value="0">${response}</option>

        `;
        } else {
          template += `
        <option value="0">Seleccione un piso</option>

        `;
          const pisos = JSON.parse(response);
          pisos.forEach((piso) => {
            template += `
            <option value="${piso.id_piso}">${piso.numero_piso}</option>
            `;
          });
        }
        $("#habs-piso").html(template);
      }
    );
  }
  function buscar_cat_hab() {
    funcion = "buscar_cat_hab";
    $.post(
      "../../controlador/UsuarioController.php",
      { funcion },
      (response) => {
        let template = "";
        if (response.trim() == "Falta crear categorias") {
          template += `
          <option value="0">${response}</option>
          `;
        } else {
          template += `
        <option value="0">Seleccione una categoria</option>

        `;
          const categorias = JSON.parse(response);
          categorias.forEach((categoria) => {
            template += `
            <option value="${categoria.id_categoria}">${categoria.nombre_categoria}</option>
            `;
          });
        }
        $("#habs-cat").html(template);
      }
    );
  }

  $("#habs-btn-add").click(() => {
    funcion = "crear_habitacion";
    let n_habitacion = $("#habs-numero").val();
    let habs_piso = $("#habs-piso").val();
    let habs_cat = $("#habs-cat").val();

    console.log(n_habitacion, habs_piso, habs_cat);
    if (habs_piso > 0 && habs_cat > 0) {
      $.post(
        "../../controlador/UsuarioController.php",
        {
          funcion,
          n_habitacion,
          habs_piso,
          habs_cat,
        },
        (response) => {
          console.log(response);
          $("#habs-numero").val("");
          $("#habs-piso").reset();
          $("#habs-cat").reset();
        }
      );
    } else {
      let template = "";
      if (habs_piso == 0) {
        template += "Falta registrar pisos, ";
      }
      if (habs_cat == 0) {
        template += "Falta registrar categorias";
      }
      alert(template);
    }
  });
});
