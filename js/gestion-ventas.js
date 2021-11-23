$(document).ready(function () {
  var funcion = "";
  // buscar_habs_ocupadas();
  buscar_reserva();

  buscar_productos();
  // function buscar_habs_ocupadas() {
  //   funcion = "buscar_habs_ocupaded";
  //   $.post(
  //     "../../controlador/UsuarioController.php",
  //     { funcion },
  //     (response) => {
  //       console.log(response);
  //       let template = "";
  //       if (response.trim() == "No existen registro de habitaciones") {
  //         template += "No hay registros";
  //         let estado = "";
  //       } else {
  //         const habitaciones = JSON.parse(response);
  //         habitaciones.forEach((habitacion) => {
  //           estado = habitacion.estado.toLowerCase();
  //           template += `
  //             <div class="card-habs bg-salida">
  //             <div class="body-card">
  //                 <ion-icon name="bed-outline"></ion-icon>
  //                 <h1>Nro: ${habitacion.n_cuarto}</h1>
  //                 <h1>${habitacion.numero_piso}</h1>
  //                 <span>${habitacion.nombre_categoria}</span>
  //             </div>
  //             <div class="footer-card">`;
  //           template += `
  //                 <a href="?id=${habitacion.id_habitaciones}&&view=vender">
  //                     <span>Ver detalles</span>
  //                     <ion-icon name="chevron-forward-outline"></ion-icon>
  //                 </a>`;
  //           template += `
  //             </div>
  //             </div>
  //             `;
  //         });
  //       }
  //       $(".list-habitaciones").html(template);
  //     }
  //   );
  // }
  $("#carrito_producto").change(() => {
    let precio_select = $("#carrito_producto option:selected").attr("price");
    $("#carrito_precio").val(precio_select);
  });
  function buscar_reserva() {
    let id_habitacion = $("#get-id").val();
    funcion = "buscar_reserva";
    $.post(
      "../../controlador/UsuarioController.php",
      { funcion, id_habitacion },
      (response) => {
        console.log(response);
        const reserva = JSON.parse(response);
        reserva.forEach((detail) => {
          $("#reserva_key").attr("key_reserva", `${detail.id_reservas}`);
          $("#hab-ncuarto").html(`${detail.n_cuarto}`);
          $("#hab-cliente").html(`${detail.cliente}`);
          $("#hab-cliente_documento").html(`${detail.documento}`);
          $("#hab-precio").html(`S/${detail.precio}.00`);
          $("#hab-categoria").html(`${detail.nombre_categoria}`);
          $("#hab-categoria").html(`${detail.nombre_categoria}`);
          $("#hab-fecha_entrada").html(`${detail.fecha_entrada}`);
          $("#hab-fecha_salida").html(`${detail.fecha_salida}`);
        });
      }
    );
  }
  function buscar_productos() {
    funcion = "buscar_productos";
    $.post(
      "../../controlador/UsuarioController.php",
      { funcion },
      (response) => {
        let template = "";
        if (response.trim() == "No existen productos creados") {
          template += `${response}`;
        } else {
          template += `
          
          
          <option value="0">Seleccion el producto</option>
          `;
          const productos = JSON.parse(response);
          productos.forEach((producto) => {
            template += `
            <option price="${producto.precio}" value="${producto.id_productos}">${producto.nombre}</option>
                `;
          });
        }
        $("#carrito_producto").html(template);
      }
    );
  }
});
