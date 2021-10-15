$(document).ready(function () {
  var funcion = "";
  var fecha = new Date(); //Fecha actual
  var mes = fecha.getMonth() + 1; //obteniendo mes
  var dia = fecha.getDate(); //obteniendo dia
  var ano = fecha.getFullYear(); //obteniendo año
  if (dia < 10) dia = "0" + dia; //agrega cero si el menor de 10
  if (mes < 10) mes = "0" + mes; //agrega cero si el menor de 10
  $("#reserva-ingreso").val(ano + "-" + mes + "-" + dia);
  dia = dia + 1;
  $("#reserva-salida").val(ano + "-" + mes + "-" + dia);

  //   Buscar habitacion por id
  var id_habitacion = $("#get-id").val();

  buscar_habitacion();
  function buscar_habitacion() {
    funcion = "buscar_habitacion";
    $.post(
      "../../controlador/UsuarioController.php",
      { funcion, id_habitacion },
      (response) => {
        const habitacion = JSON.parse(response);
        habitacion.forEach((hab) => {
          $("#hab-ncuarto").html(hab.n_cuarto);
          $("#hab-categoria").html(hab.nombre_categoria);
          $("#hab-estado").html(hab.estado);
          let precio = `S/${hab.precio}.00`;
          $("#hab-precio").html(precio);
          $("#reserva-total").val(hab.precio);
          $("#reserva-total-descuento").val(hab.precio);
        });

        var total = $("#reserva-total").val();
        $(document).on("keyup", "#reserva-descuento", (e) => {
          aplicar_descuento(total);
        });

        $("#reserva-salida").change((e) => {
          aplicar_descuento(total);
        });
      }
    );
  }
  function aplicar_descuento(total) {
    var resta;
    var fecha_s = $("#reserva-salida").val();
    var f_s = new Date(fecha_s); //Fecha actual
    var dia_s = f_s.getDate();

    //

    var fecha_i = $("#reserva-ingreso").val();
    var f_i = new Date(fecha_i);
    var dia_i = f_i.getDate();

    //
    var descuento = $("#reserva-descuento").val();
    resta = dia_s - dia_i;
    $("#reserva-total").val(total * resta);
    $("#reserva-total-descuento").val(total * resta - descuento);
  }
});
