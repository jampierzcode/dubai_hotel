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
        <td>No hay registros</td>

        `;
        } else {
          const pisos = JSON.parse(response);
          pisos.forEach((piso) => {
            template += `
            <tr>
            <td>${piso.id_piso}</td>
            <td>${piso.numero_piso}</td>
            <td>
                <ion-icon class="edit-btn" id="edit-piso-hab" name="pencil-sharp"></ion-icon>
                <ion-icon class="remove-btn" id="remove-piso-hab" name="trash"></ion-icon>
            </td>
        </tr>
            `;
          });
        }
        $("#list-pisos").html(template);
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
          <td>No hay registros</td>
          `;
        } else {
          const categorias = JSON.parse(response);
          categorias.forEach((categoria) => {
            template += `
            <tr>
            <td>${categoria.id_categoria}</td>
            <td>${categoria.nombre_categoria}</td>
            <td>
                <ion-icon class="edit-btn" id="edit-cat-hab" name="pencil-sharp"></ion-icon>
                <ion-icon class="remove-btn" id="remove-cat-hab" name="trash"></ion-icon>
            </td>
        </tr>
            `;
          });
        }
        $("#list-categorias").html(template);
      }
    );
  }
  buscar_habitaciones();
  function buscar_habitaciones() {
    funcion = "buscar_habitacion";
    $.post(
      "../../controlador/UsuarioController.php",
      { funcion },
      (response) => {
        let template = "";
        if (response.trim() == "No existen registro de habitaciones") {
          template += "<td>No hay registros</td>";
        } else {
          const habitaciones = JSON.parse(response);

          habitaciones.forEach((habitacion) => {
            template += `
          <tr>
          <td>${habitacion.id_habitaciones}</td>
          <td>${habitacion.n_cuarto}</td>
          <td>${habitacion.nombre_categoria}</td>
          <td>${habitacion.numero_piso}</td>
          <td>S/ ${habitacion.precio}.00</td>
          <td>
              <ion-icon class="edit-btn" id="edit-hab" name="pencil-sharp"></ion-icon>
              <ion-icon class="remove-btn" id="remove-hab" name="trash"></ion-icon>
          </td>
          </tr>
          `;
          });
        }
        $("#list-habitaciones").html(template);
      }
    );
  }
});
