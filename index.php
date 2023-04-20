<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/icon hotel.jpeg" />
    <!-- search styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- swiper styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/main.css" />
    <title>Hotel emperador</title>
</head>

<body>
    <header class="nav-header">
        <div class="row-h">
            <div class="ident-logo">
                <a href="#"><img src="img/logohotel.png" class="logo-item" alt="" /></a>
            </div>
            <nav class="menu-nav">
                <ul class="links-menu">
                    <li class="item-nav"><a href="#">Inicio</a></li>
                    <li class="item-nav"><a href="view/nosotros/">Nosotros</a></li>
                    <li class="item-nav"><a href="view/gallery/">Galeria</a></li>
                    <li class="item-nav">
                        <a href="view/habitaciones/">Habitaciones</a>
                    </li>
                    <li class="item-nav"><a href="view/contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="portada-home">
        <div class="swiper portada">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="content-portada">
                        <h1 class="ta-center">Hotel Emperador Tacna</h1>
                        <p class="ta-center">
                            Bienvenido al fabuloso Hotel en el Centro de Tacna
                        </p>
                        <!-- <button class="btn-porta">Reservas</button> -->
                    </div>
                    <img src="img/bienvenido.png" alt="" class="img-portada" />
                </div>
                <!-- <div class="swiper-slide">
            <div class="content-portada">
              <h1 class="ta-center">Hotel Emperador Tacna</h1>
              <p class="ta-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <button class="btn-porta">Reservas</button>
            </div>
            <img
              src="https://img.resemmedia.com/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzL2ViOGZiNzBkLTQyMzItNDFmYi1iNDc5LWZmMTllM2JlNmY2Ny9lM2I3YzllOC00Y2UzLTQ4ZDUtODk2YS02MGRlNTQ1ZWJkODEuanBnIiwiYnJhbmQiOiJSRVNFTSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6ODQwLCJoZWlnaHQiOjYzMCwiZml0IjoiY292ZXIifX19"
              alt=""
              class="img-portada"
            />
          </div> -->
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev flechas-h"></div>
        <div class="swiper-button-next flechas-h"></div> -->

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
    </div>
    <div class="container-search">
        <span class="title-search">Que deseas hacer hoy?</span>
        <div class="group-search">
            <div class="box-group">
                <input id="date-ida" class="input-item" type="text" name="daterange" placeholder="Check-in (Fecha de Ida)" />
            </div>
            <div class="box-group">
                <input id="date-salida" class="input-item" type="text" name="daterange" placeholder="Check-out (Fecha de Salida)" />
            </div>
            <div class="box-group qnt-results">
                <label class="list-detail-inputs">
            <span class="block-list">
              <span id="sr-qnt-0" class="list-box">1 adulto(s)</span>
              <span id="sr-qnt-1" class="list-box"> · 0 niño(s)</span>
              <span id="sr-qnt-2" class="list-box"> · 1 habitacion(es)</span>
            </span>
          </label>
                <div class="detail-add-inputs hidden">
                    <ul class="ul-list">
                        <li class="list-add">
                            <label class="name_list">Adultos</label>
                            <span key_qnt-type="adults" class="block-list-add">
                  <button class="list-box disabled less">-</button>
                  <span id="qnt-adultos" class="list-box qnt-box">1</span>
                            <button class="list-box more">+</button>
                            </span>
                        </li>
                        <li class="list-add">
                            <label class="name_list">Niños</label>
                            <span key_qnt-type="ninos" class="block-list-add">
                  <button class="list-box disabled less">-</button>
                  <span id="qnt-ninos" class="list-box qnt-box">0</span>
                            <button class="list-box more">+</button>
                            </span>
                        </li>
                        <li class="list-add">
                            <label class="name_list">Habitaciones</label>
                            <span key_qnt-type="habs" class="block-list-add">
                  <button class="list-box disabled less">-</button>
                  <span id="qnt-habs" class="list-box qnt-box">1</span>
                            <button class="list-box more">+</button>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box-group submit-btn-box">
                <button id="search-habs" class="input-submit">
            <span>Buscar</span><ion-icon name="search-outline"></ion-icon>
          </button>
            </div>
        </div>
    </div>
    <div class="section container">
        <div class="row flex-w">
            <div class="col-md">
                <img class="img-ctr-portada" width="100%" src="https://i.pinimg.com/736x/b5/6c/b7/b56cb708786b597116203340f6e84efe.jpg" alt="" />
                <!-- <img
            width="100%"
            src="https://hotelemperadortacna.com/assets/img/intro_section/1657674934.jpg"
            alt=""
          /> -->
            </div>
            <div class="col-md d-flex-c">
                <div class="index-title-section">
                    <span class="ta-start">Vive experiencias</span>
                    <h1 class="ta-start">únicas e inolvidables</h1>
                </div>
                <p>
                    Tacna una ciudad de importante afluencia turística, siendo a nivel nacional la tercera ciudad con mayor tráfico de turistas extranjeros. Y la frontera mas agradable y desarrollada por el comercio de todo el Perú. Desde hace más de 30 años nuestra Empresa
                    a venido trabajando en el rubro de la Hotelería lo que garantiza que con nuestra experiencia, su estadía en la Heroica Ciudad de Tacna sea confortable y placentera. Nuestra Misión es servir a nuestros clientes con excelencia y brindarles
                    una experiencia unica.
                </p>
            </div>
        </div>
    </div>
    <div class="section page-hab">
        <div class="index-title-section mg-h">
            <span class="ta-center">Nuestras Habitaciones</span>
            <h1 class="ta-center">Destacadas</h1>
        </div>
        <!-- Slider main container -->
        <div class="swiper habitaciones">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
    </div>
    <div class="section-page footer-crea">
        <div class="row row_qh">
            <div class="col-lg-4">
                <img class="logo-footer" src="../../img/logohotel.png" alt="" />
                <h3 class="info-contact">
                    Emperador es un Hotel con mucha tradición y experiencia en la atención de clientes, Considerados como unos de los mejores hoteles en Tacna.
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
                    <a target="_blank" href="https://www.facebook.com/hotelemperadortacna" class="box-social">
                        <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
                    </a>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=51952990051&amp;text=Hola%20vengo%20del%20sitio%20web%20Brindeme%20informaci%C3%B3n%20de%20la%20habitacion..." class="box-social">
                        <ion-icon name="logo-whatsapp" role="img" class="md hydrated" aria-label="logo whatsapp"></ion-icon>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/hotelemperadortacna/" class="box-social">
                        <ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
        <div class="bar-bottom-footer col-lg-12">
            <p class="mb-0">2023 Hotel Emperador | Todos los derechos reservados</p>
        </div>
    </div>

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/static/home.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- search js -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- ion icons js -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- system js -->
    <script src="js/static/custom-fecha.js"></script>

    <script src="js/static/custom-swiper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="js/static/custom-select.js"></script>
    <script>
        var stickyHeaderTop = $(".nav-header").offset().top;
        $(window).scroll(function() {
            if ($(window).scrollTop() > 20) {
                //$('#sticky').css({position: 'fixed', top: '0px', float: 'right'});
                $(".nav-header").addClass("sticky");
            } else {
                $(".nav-header").removeClass("sticky");
            }
        });
    </script>
</body>

</html>