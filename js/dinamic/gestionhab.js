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
            <td>S/${categoria.precio}.00</td>
            <td>
                <ion-icon key_hab="${categoria.id_categoria}" class="edit-btn" id="edit-cat-hab" name="pencil-sharp"></ion-icon>
                <ion-icon key_hab="${categoria.id_categoria}" class="remove-btn" id="remove-cat-hab" name="trash"></ion-icon>
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
          <td id="hab-id">${habitacion.id_habitaciones}</td>
          <td id="hab-numero">${habitacion.n_cuarto}</td>
          <td id="hab-categoria">${habitacion.nombre_categoria}</td>
          <td id="hab-piso">${habitacion.numero_piso}</td>
          <td>
              <ion-icon key_hab=${habitacion.id_habitaciones} class="edit-btn" id="edit-hab" name="pencil-sharp"></ion-icon>
              <ion-icon key_hab=${habitacion.id_habitaciones} class="remove-btn" id="remove-hab" name="trash"></ion-icon>
          </td>
          </tr>
          `;
          });
        }
        $("#list-habitaciones").html(template);
      }
    );
  }
  var campo_general = "";
  var campos = [
    {
      "title": "categoria",
      campos: [
        {
          name: "Nombre",
          id: "nombre",
          type: "text",
          originData: null
        },
        {
          name: "Precio",
          id: "precio",
          type: "number",
          originData: null
        }
      ]
    },
    {
      "title": "habitaciones",
      campos: [
        {
          name: "Numero de Habitacion",
          id: "numero",
          type: "number",
          originData: null
        },
        {
          name: "Categoria/Tipo",
          id: "categoria",
          type: "select",
          originData: "categoria"

        },
        {
          name: "Piso",
          id: "piso",
          type: "select",
          originData: "piso"
        }
      ]
    },
    {
      "title": "piso",
      campos: [
        {
          name: "Numero de Piso",
          id: "numero",
          type: "number",
          originData: null
        }
      ]
    }
  ]
  // funcion de editar campos de modal
  function edit_modal_campos(campo_general) {

    for (let index = 0; index < campos.length; index++) {
      if (campos[index].title == campo_general) {
        let element = campos[index];
        console.log(element.title)
        // editar el modal en diferentes campos
        // title
        $("#modal-edit-habs .title-modal").html(`Editar ${element.title}`);
        // campos
        template_campos = ""
        for (let ind = 0; ind < element.campos.length; ind++) {
          template_campos += `
          <div class="card-input">
          <span>${element.campos[ind].name}</span>`;
          switch (element.campos[ind].type) {
            case "text":
              template_campos += `
              <div class="input-group">
              <input type="text" id="${campos[index].title}-${element.campos[ind].name}" placeholder="Ingrese el ${element.campos[ind].name}">
          </div>
          </div>
              `
              break;
            case "number":
              template_campos += `
              <div class="input-group">
              <input type="number" id="${campos[index].title}-${element.campos[ind].id}" placeholder="Ingrese el ${element.campos[ind].name}">
          </div>
          </div>
              `
              break;
            case "select":
              template_campos += `
              <div class="input-group">
              <select id="${campos[index].title}-${element.campos[ind].id}" >
              <option>Seleccione un ${element.campos[ind].id}</option>
              </select>
          </div>
          </div>
              `
              break;

            default:
              break;
          }
        }
        $("#modal-edit-habs #list-campos").html(template_campos)
      }
    }
    $("#modal-edit-habs").removeClass("md-hidden");
  }
  // fin de funcion de editar campos de modal

  //  EDIT habitaciones
  $(document).on(
    "click",
    ".edit-btn#edit-hab",
    (e) => {
      campo_general = "habitaciones"
      // llamamos a la funcion para modal
      edit_modal_campos(campo_general)
      // fin de la funcion modal


      console.log(campo_general)
      funcion = "buscar_habs_id";
      let id_hab = $(e.target).attr("key_hab");
      console.log(id_hab)
      // $.post(
      //   "../../controlador/UsuarioController.php",
      //   { funcion, id_producto },
      //   (response) => {
      //     const producto = JSON.parse(response);
      //     producto.forEach((element) => {
      //       $("#modal-edit-product").attr(
      //         "key_producto",
      //         `${ element.id_productos } `
      //       );
      //       $("#modal-edit-product #producto-nombre").val(`${ element.nombre } `);
      //       $("#modal-edit-product #producto-precio").val(`${ element.precio } `);
      //       $("#modal-edit-product #producto-inventario").val(
      //         `${ element.inventario } `
      //       );
      //     });
      //   }
      // );
    }
  );
  //  EDIT CATEGORIA habitaciones
  $(document).on(
    "click",
    ".edit-btn#edit-cat-hab",
    (e) => {
      campo_general = "categoria"
      // llamamos a la funcion para modal
      edit_modal_campos(campo_general)
      // fin de la funcion modal
      funcion = "buscar_habs_id";
      let id_cliente = $(e.target).attr("key_hab");
      console.log(id_cliente)
      // $.post(
      //   "../../controlador/UsuarioController.php",
      //   { funcion, id_producto },
      //   (response) => {
      //     const producto = JSON.parse(response);
      //     producto.forEach((element) => {
      //       $("#modal-edit-product").attr(
      //         "key_producto",
      //         `${ element.id_productos } `
      //       );
      //       $("#modal-edit-product #producto-nombre").val(`${ element.nombre } `);
      //       $("#modal-edit-product #producto-precio").val(`${ element.precio } `);
      //       $("#modal-edit-product #producto-inventario").val(
      //         `${ element.inventario } `
      //       );
      //     });
      //   }
      // );
    }
  );
  // SHOW MODAL CREATE
  $("#create-clients").click(() => {
    $(".modal-create").removeClass("md-hidden");
  });
  $(".form-create .close-modal").click(() => {
    $("#tipo-documento-modal").val(0);
    $("#documento-modal").val("");
    $("#documento-modal").attr("disabled", "true");
    $("#nombres-modal").val("");
    $(".modal-create").addClass("md-hidden");
  });

  $("#cancel-form").click(() => {
    $("#tipo-documento-modal").val(0);
    $("#documento-modal").val("");
    $("#nombres-modal").val("");
    $(".modal-create").addClass("md-hidden");
  });
});
