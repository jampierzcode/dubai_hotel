<?php
$categoria_hab = $_GET["category"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- date range -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"
    />
    <!-- habitaciones css -->
    <link rel="stylesheet" href="../../css/habitaciones.css">
    <!-- swiper -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
    <!-- bootstrap css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../css/main.css" />
    <title>Habitaciones en Tacna</title>
</head>
<body>
    <header class="nav-header">
      <div class="row-h">
        <div class="ident-logo">
          <a href="../../"><img src="../../img/logohotel.png" class="logo-item" alt="" /></a>
        </div>
        <nav class="menu-nav">
          <ul class="links-menu">
            <li class="item-nav"><a href="../../">Inicio</a></li>
            <li class="item-nav"><a href="../nosotros/">Nosotros</a></li>
            <li class="item-nav"><a href="../gallery/">Galeria</a></li>
            <li class="item-nav">
              <a href="../habitaciones/">Habitaciones</a>
            </li>
            <li class="item-nav"><a href="../contacto">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="section container hab-type-sec" hab-type="<?php echo $categoria_hab?>">
    <h1  class="title-simple-hab"></h1>
        <div class="row">
            <div class="col-md-8">
                
                <div class="swiper habitacion-select">
            <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                <!-- Slides -->
                        <div class="swiper-slide">
                        <img id="key_img_main" src="" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="../../img/desayuno.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="../../img/desayuno2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="../../img/desayuno3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="../../img/desayuno4.png" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="../../img/desayuno5.png" alt="">
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
        <div class="swiper-button-prev flechas-h"></div>
        <div class="swiper-button-next flechas-h"></div>
                </div>
                <div thumbsslider class="swiper habitacion-point">
            <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                <!-- Slides -->
                        <div class="swiper-slide">
                        <img id="key_img_thumb" src="" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="../../img/desayuno.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="../../img/desayuno2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="../../img/desayuno3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="../../img/desayuno4.png" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="../../img/desayuno5.png" alt="">
                        </div>
                    </div>
                </div>
                <h2>Caracteristicas</h2>
                <ul class="caracteristicas">
                    

                </ul>
            </div>
            <div class="col-md-4">
                <form id="form-contact"  class="formulario">
                    <div class="box-input">
                        <input id="user_name" name="user_name" type="text" placeholder="Nombre Completo" required/>
                    </div>
                    <div class="box-input">
                        <input id="user_email" name="user_email" type="email" placeholder="Correo electronico" required/>
                    </div>
                    <div class="box-input">
                        <input id="user_cant_huespedes" name="user_cant_huespedes" type="number" placeholder="Numero de huespedes" required/>
                    </div>
                    <div class="box-input">
                        <input name="fecha" id="fecha" type="text" name="daterange"/>
                    </div>
                    <div class="box-input">
                        <input id="user_telefono" name="" type="text" placeholder="Telefono: 999999999" />
                    </div>
                    <div class="box-input">
                        <input id="btn-reserva" class="btn-submit" type="submit" value="Enviar" />
                    </div>
                    <div class="response-email"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="section-page footer-crea">
      <div class="row row_qh">
        <div class="col-lg-4">
          <img class="logo-footer" src="img/logohotel.png" alt="" />
          <h3 class="info-contact">
            Emperador es un Hotel con mucha tradición y experiencia en la
            atención de clientes, Considerados como unos de los mejores hoteles
            en Tacna.
          </h3>
        </div>
        <div class="col-lg-4">
          <h2 class="title-info mb-4">Explora</h2>
          <ul class="menu-footer">
            <li>
              <a href="#">Inicio</a>
            </li>
            <li>
              <a href="view/nosotros"> Nosotros </a>
            </li>
            <li>
              <a href="view/galeria"> Galeria </a>
            </li>
            <li>
              <a href="view/habitaciones"> Habitaciones </a>
            </li>
            <li>
              <a href="view/contacto"> Contacto</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h2 class="title-info mb-4">Contácto:</h2>
          <h3 class="info-contact">+51 952990051</h3>
          <h3 class="info-contact">reservas@hotelemperadortacna.com</h3>
          <h3 class="info-contact">Av. San Martín 558, Tacna</h3>
          <div class="redes-social">
            <a
              target="_blank"
              href="https://www.facebook.com/hotelemperadortacna"
              class="box-social"
              ><ion-icon
                name="logo-facebook"
                role="img"
                class="md hydrated"
                aria-label="logo facebook"
              ></ion-icon
            ></a>
            <a
              target="_blank"
              href="https://api.whatsapp.com/send?phone=51952990051&amp;text=Hola%20vengo%20del%20sitio%20web%20Brindeme%20informaci%C3%B3n%20de%20la%20habitacion..."
              class="box-social"
              ><ion-icon
                name="logo-whatsapp"
                role="img"
                class="md hydrated"
                aria-label="logo whatsapp"
              ></ion-icon
            ></a>
            <a
              target="_blank"
              href="https://www.instagram.com/hotelemperadortacna/"
              class="box-social"
              ><ion-icon
                name="logo-instagram"
                role="img"
                class="md hydrated"
                aria-label="logo instagram"
              ></ion-icon
            ></a>
          </div>
        </div>
      </div>
      <div class="bar-bottom-footer col-lg-12">
        <p class="mb-0">2023 Hotel Emperador | Todos los derechos reservados</p>
      </div>
    </div>

    <!-- scripts -->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
    ></script>

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="../../js/jquery.min.js"></script>
    
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
    ></script>
    
    <script src="../../js/picker_custom.js"></script>
    <script src="../../js/swiper-habs.js"></script>
    <script src="../../js/email.js"></script>

    <!-- ion icons js -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
      var stickyHeaderTop = $(".nav-header").offset().top;
          $(".nav-header").addClass("sticky");
    </script>
</body>
</html>