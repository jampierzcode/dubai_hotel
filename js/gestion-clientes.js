$(document).ready(function () {
  var funcion = "";
  buscar_clientes();

  // section presentation modal

  function buscar_clientes() {
    funcion = "buscar_clientes";
    $.post(
      "../../controlador/UsuarioController.php",
      { funcion },
      (response) => {
        let template = "";
        if (response.trim() == "no-register-cliente") {
          template += `${response}`;
        } else {
          const clientes = JSON.parse(response);
          clientes.forEach((cliente) => {
            template += `
                <div class="card-product">
                <p class="campo_tabla">${cliente.nombres}
                </p>
                <p class="campo_tabla">${cliente.tipo_documento}</p>
                <p class="campo_tabla">${cliente.documento}</p>
                <div class="actions-button-products">
                    <button class="btn-edit" key_client="${cliente.id_cliente}">
                        <ion-icon name="pencil-sharp"></ion-icon>
                    </button>
                    <button class="btn-remove" key_client="${cliente.id_cliente}">
                        <ion-icon name="trash-sharp"></ion-icon>
                    </button>
                </div>
            </div>
                `;
          });
          $("#clientes-body-table").html(template);
        }
      }
    );
  }

  $("#create-clients").click(() => {
    $(".modal-create").removeClass("md-hidden");
  });
  $(".form-create .close-modal").click(() => {
    $("#tipo-documento-modal").val(0);
    $("#documento-modal").val("");
    $("#nombres-modal").val("");
    $(".modal-create").addClass("md-hidden");
  });

  $("#cancel-form").click(() => {
    $("#tipo-documento-modal").val(0);
    $("#documento-modal").val("");
    $("#nombres-modal").val("");
    $(".modal-create").addClass("md-hidden");
  });

  // fin de presentation modal
});
