<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/portada.css">
    <link rel="stylesheet" href="css/reserva_fechas.css">
    <link rel="stylesheet" href="css/room.css">
    <link rel="stylesheet" href="https://github.com/lokesh/lightbox2/blob/dev/src/css/lightbox.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <title>Hotel Dubai</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="img-logo">
                <ion-icon name="business-outline"></ion-icon>
                <h1 class="title-logo">Hotel Dubai</h1>
            </div>
            <ul class="main_menu">
                <li><a href="#">
                        <ion-icon name="bed-outline"></ion-icon> Inicio
                    </a></li>
                <li><a href="#">
                        <ion-icon name="calendar-outline"></ion-icon> Reservas
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-whatsapp"></ion-icon> Contacto
                    </a></li>
                <li><a href="#">
                        <ion-icon id="cart-shop" name="cart-outline"></ion-icon>
                    </a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container-sliders">
            <div class="img-lider">
                <img src="img/turista2.png" alt="">
            </div>
            <div class="container-context">
                <h1>Hotel Dubai</h1>
                <p>Vive la experciencia con habitaciones modernas y de estro. Momentos con parejas y mas.</p>
            </div>
        </div>
        <div class="container_fechas">
            <div class="block-reservas">
                <div class="date-row">

                    <span>Ingreso</span>
                    <div class="input_date">

                        <ion-icon name="calendar-outline"></ion-icon>
                        <input placeholder="Ingreso" type="text" id="from">
                        <!-- <input type="date" id="date_input"> -->
                    </div>
                </div>
                <div class="date-row">
                    <span>Salida</span>
                    <div class="input_date">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <input placeholder="Salida" type="text" id="to">
                    </div>
                </div>
                <div class="date-row">
                    <span>Adultos</span>
                    <div class="input_date">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="number" min="0" max="2" placeholder="N° Adultos" id="date_adults">
                    </div>
                </div>
                <div class="date-row">
                    <span>Niños</span>
                    <div class="input_date">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="number" placeholder="N° Niños " id="date_children">
                    </div>
                </div>
                <div class="date-row">
                    <div class="input_date">
                        <button>
                            <ion-icon name="search-sharp"></ion-icon> Buscar
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div class="container_habitaciones">
            <div class="title_section">
                <h1>Nuestra Habitaciones</h1>
            </div>
            <div class="container-room">
                <div class="card-room">
                    <div class="img-room">
                        <img src="img/DUBAI  10.png" data-lightbox="image-1" data-title="My caption" alt="">
                    </div>
                    <div class="context-room">
                        <h1 class="title-room">
                            Habitacion Simple
                        </h1>
                        <p class="price-room">
                            S/80<span>.00</span>
                        </p>

                        <p class="description-room">
                            Contamos con todos los servicios ...
                        </p>
                        <ul class="services-room">
                            <li>
                                <ion-icon name="wifi-outline"></ion-icon> Wi-Fi
                            </li>
                            <li>
                                <ion-icon name="bulb-outline"></ion-icon> Lámpara
                            </li>
                            <li>
                                <ion-icon name="tv-outline"></ion-icon> Tv
                            </li>
                            <li>
                                <ion-icon name="water-outline"></ion-icon> Agua Caliente
                            </li>
                        </ul>
                        <button class="btn-reserva">Reservar</button>
                    </div>
                </div>
                <div class="card-room">
                    <div class="img-room">
                        <img src="img/DUBAI 8.png" alt="">
                    </div>
                    <div class="context-room">
                        <h1 class="title-room">
                            Habitacion Doble
                        </h1>
                        <p class="price-room">
                            S/120<span>.00</span>
                        </p>

                        <p class="description-room">
                            Contamos con todos los servicios ...
                        </p>
                        <ul class="services-room">
                            <li>
                                <ion-icon name="wifi-outline"></ion-icon> Wi-Fi
                            </li>
                            <li>
                                <ion-icon name="bulb-outline"></ion-icon> Luz
                            </li>
                            <li>
                                <ion-icon name="tv-outline"></ion-icon> Tv
                            </li>
                        </ul>
                        <button class="btn-reserva">Reservar</button>
                    </div>
                </div>
                <div class="card-room">
                    <div class="img-room">
                        <img src="img/DUBAI 9.png" alt="">
                    </div>
                    <div class="context-room">
                        <h1 class="title-room">
                            Habitacion Suite Ejecutive
                        </h1>
                        <p class="price-room">
                            S/150<span>.00</span>
                        </p>

                        <p class="description-room">
                            Contamos con todos los servicios ...
                        </p>
                        <ul class="services-room">
                            <li>
                                <ion-icon name="wifi-outline"></ion-icon> Wi-Fi
                            </li>
                            <li>
                                <ion-icon name="bulb-outline"></ion-icon> Luz
                            </li>
                            <li>
                                <ion-icon name="tv-outline"></ion-icon> Tv
                            </li>
                        </ul>
                        <button class="btn-reserva">Reservar</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="path/to/lightbox.js"></script>
<script src="js/calendar.js"></script>

</html>