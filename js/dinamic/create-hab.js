$(document).ready(function () {
  var funcion = "";
  var imgUrl = "";
  var CLOUDINARYURL = "https://api.cloudinary.com/v1_1/dprxpdyo0/image/upload";
  var CLOUDINARY = "gvxcgblr";
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
  $(".list-caracteristicas .target-car").click((e) => {
    $(e.target).toggleClass("active");
  });
  $("#habs-btn-add").click(() => {
    funcion = "crear_habitacion";
    let n_habitacion = $("#habs-numero").val();
    let habs_piso = $("#habs-piso").val();
    let habs_cat = $("#habs-cat").val();
    let caracteristicas = $(".target-car.active");
    let caracteristicas_desc = "";
    for (let index = 0; index < caracteristicas.length; index++) {
      const element = caracteristicas[index];
      caracteristicas_desc += element.innerHTML;
      if (index < caracteristicas.length - 1) {
        caracteristicas_desc += ",";
      }
    }
    if (habs_piso > 0 && habs_cat > 0 && caracteristicas_desc !== "") {
      $.post(
        "../../controlador/UsuarioController.php",
        {
          funcion,
          n_habitacion,
          habs_piso,
          habs_cat,
          caracteristicas_desc,
        },
        (response) => {
          if (response == "add-habs") {
            alert("Se creo correctamente la habitacion");
            $("#habs-numero").val("");
            $("#habs-piso").val(0);
            $("#habs-cat").val(0);
            let activesCategories = $(
              ".list-caracteristicas .target-car.active"
            );
            for (let index = 0; index < activesCategories.length; index++) {
              activesCategories[index].classList.remove("active");
            }
          } else {
            console.log("paso algo");
          }
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
      if (imgUrl == "") {
        template += "Falta subir una imagen";
      }
      if (caracteristicas_desc == "") {
        template += "Falta seleccionar por lo menos una categoria";
      }
      alert(template);
    }
  });
});
