$(document).ready(function () {
  var funcion = "";
  buscar_habitaciones();
  function buscar_habitaciones() {
    funcion = "buscar_habitacion";
    $.post(
      "../../controlador/UsuarioController.php",
      { funcion },
      (response) => {
        let template = "";
        if (response.trim() == "No existen registro de habitaciones") {
          template += "No hay registros";
          let estado = "";
        } else {
          const habitaciones = JSON.parse(response);
          habitaciones.forEach((habitacion) => {
            estado = habitacion.estado.toLowerCase();
            template += `
            <div class="card-habs bg-${estado}">
            <div class="body-card">
                <ion-icon name="bed-outline"></ion-icon>
                <h1>Nro: ${habitacion.n_cuarto}</h1>
                <h1>${habitacion.numero_piso}</h1>
                <span>${habitacion.nombre_categoria}</span>
            </div>
            <div class="footer-card">`;
            if (habitacion.estado == "Disponible") {
              template += `
                <a href="?id=${habitacion.id_habitaciones}&&view=reservar">
                    <span>${habitacion.estado}</span>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>`;
            }
            if (habitacion.estado == "Ocupado") {
              template += `
                <a href="../Comprobante/?id=${habitacion.id_habitaciones}">
                    <span>${habitacion.estado}</span>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>`;
            }
            if (habitacion.estado == "Limpieza") {
              template += `
                <a key="${habitacion.id_habitaciones}" id="limpieza-cancel">
                    <span>${habitacion.estado}</span>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>`;
            }
            template += `
            </div>
            </div>
            `;
          });
          $(".list-habitaciones").html(template);
        }
      }
    );
  }
});
