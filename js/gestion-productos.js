$(document).ready(function () {
  var funcion = "";
  buscar_productos();

  function buscar_productos() {
    funcion = "buscar_productos";
    $.post(
      "../../controlador/UsuarioController.php",
      { funcion },
      (response) => {
        console.log(response);
        let template = "";
        if (response.trim() == "No existen productos creados") {
          template += `${response}`;
        } else {
          const productos = JSON.parse(response);
          productos.forEach((producto) => {
            template += `
                <div class="card-product">
                <p class="campo_tabla">${producto.nombre}
                </p>
                <p class="campo_tabla">s/${producto.precio}</p>
                <p class="campo_tabla">${producto.inventario} und</p>
                <div class="actions-button-products">
                    <button class="btn-edit">
                        <ion-icon name="pencil-sharp"></ion-icon>
                    </button>
                    <button class="btn-remove">
                        <ion-icon name="trash-sharp"></ion-icon>
                    </button>
                </div>
            </div>
                `;
          });
          $("#productos-body-table").html(template);
        }
      }
    );
  }

  // MODAL SHOW
  $("#create-productos").click(() => {
    $(".modal-create").removeClass("md-hidden");
  });
  $(".close-modal").click(() => {
    $(".modal-create").addClass("md-hidden");

    $("#producto-nombre").val("");
    $("#producto-precio").val("");
    $("#producto-inventario").val("");
  });
  $("#cancel-form").click(() => {
    $(".modal-create").addClass("md-hidden");

    $("#producto-nombre").val("");
    $("#producto-precio").val("");
    $("#producto-inventario").val("");
  });

  // FIN DE MODAL SHOW

  //   CREATE PRODUCTOS
  $("#add-producto-form").click((e) => {
    funcion = "crear_productos";
    e.preventDefault();

    let nombre = $("#producto-nombre").val();
    let precio = $("#producto-precio").val();
    let inventario = $("#producto-inventario").val();

    if ((nombre, precio, inventario)) {
      console.log(nombre, precio, inventario);
      $.post(
        "../../controlador/UsuarioController.php",
        { funcion, nombre, precio, inventario },
        (response) => {
          alert("Producto agregado correctamente");
          $("#producto-nombre").val("");
          $("#producto-precio").val("");
          $("#producto-inventario").val("");
          buscar_productos();
        }
      );
    } else {
      alert("te faltan llenar campos en el formulario");
    }

    // let file = new FormData($("#form_producto_add")[0]);
    // $.ajax({
    //   url: "../../controlador/UsuarioController.php",
    //   type: "POST",
    //   data: file,
    //   cache: false,
    //   processData: false,
    //   contentType: false,
    // }).done(function (response) {
    //   if (response.trim() == "no_format_imagen") {
    //     alert(
    //       "No se admite este tipo de formato, revisa si la imagen es: jpg, jpeg, png"
    //     );
    //   } else {
    //     console.log("imagen subida con exito");
    //   }
    // });
  });

  // FIN DE CREATE PRODCUTOS
});
