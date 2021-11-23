<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/navdashboard.css">
    <link rel="stylesheet" href="../../css/container-dashboard.css">
    <link rel="stylesheet" href="../../css/recepcion.css">

    <link rel="icon" href="../../img/logo.jpg">
    <?php
    if (!empty($_GET["view"])) {
    ?>
        <link rel="stylesheet" href="../../css/reservar_habs.css">
    <?php } ?>
    <title>Hotel Dubai / Gestion</title>
</head>

<body>
    <?php
    include_once "../../components/Sidebar.php"
    ?>
    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop" href="../GestionHotel">
                    <ion-icon name="pie-chart"></ion-icon>
                    <p>Dashboard</p>
                </a>
            </div>
        </div>
    </li>
    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop active-link" href="../Recepcion">
                    <ion-icon name="notifications"></ion-icon>
                    <p>Recepcion</p>
                </a>
            </div>
        </div>
    </li>

    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop" href="../Clients">
                    <ion-icon name="people-sharp"></ion-icon>
                    <p>Clientes</p>
                </a>
            </div>
        </div>
    </li>
    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop" href="../Habitaciones">
                    <ion-icon name="bed-outline"></ion-icon>
                    <p>Habitaciones</p>
                </a>
            </div>
        </div>
    </li>

    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop" href="../Ventas">
                    <i class="fas fa-dollar-sign"></i>
                    <p>Ventas</p>
                </a>
            </div>
        </div>
    </li>
    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop" href="../Salidas">
                    <ion-icon name="log-out-outline"></ion-icon>
                    <p>Salidas</p>
                </a>
            </div>
        </div>
    </li>
    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop" href="../Servicios">
                    <ion-icon name="restaurant-outline"></ion-icon>
                    <p>Servicio habitacion</p>
                </a>
            </div>
        </div>
    </li>
    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop" href="../Productos">
                    <ion-icon name="storefront-outline"></ion-icon>
                    <p>Productos</p>
                </a>
            </div>
        </div>
    </li>
    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop" href="#">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <p>Reservas</p>
                </a>
            </div>
        </div>
    </li>
    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop" href="../../controlador/LogoutController.php">
                    <ion-icon name="chevron-back-circle-sharp"></ion-icon>
                    <p>Cerrar sesión</p>
                </a>
            </div>
        </div>
    </li>
    </ul>
    </div>
    </aside>
    <div class="container-dashboard">

        <?php
        if (isset($_SESSION["msg-reserva"])) {
            if ($_SESSION["msg-reserva"] == "add-reserva") {

        ?>
                <div class="task-msg">
                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                    <p>Se ha registrado correctamente la habitacion</p>
                </div>

        <?php
                $_SESSION["msg-reserva"] = "nada";
            }
        }
        ?>
        <span class="route">
            > Home > Recepcion
        </span>
        <?php
        if (!empty($_GET["view"])) {
        ?>
            <?php
            if ($_GET["view"] = "reservar") { ?>
                <div class="modal-create-client md-hidden">
                    <div class="form-create-cliente">

                        <div class="close-modal">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </div>
                        <h1>Crear cliente</h1>
                        <div class="card-input">
                            <span>Tipo de documento</span>
                            <div class="input-group">
                                <select name="type-register" id="tipo-documento-modal">
                                    <option value="0">Seleccione el tipo de documento</option>
                                    <option value="1">DNI</option>
                                    <option value="2">RUC</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-input">
                            <span>Documento</span>
                            <div class="input-group">
                                <i class="fas fa-address-card"></i>
                                <input id="documento-modal" type="number" placeholder="Ingrese el numero">
                            </div>
                        </div>
                        <div class="card-input">
                            <span>Nombres</span>
                            <div class="input-group">

                                <ion-icon name="person-circle-outline"></ion-icon>
                                <input id="nombres-modal" type="text" placeholder="Ingrese los nombres o razon social">
                            </div>
                        </div>
                        <div class="card-input buttons-modal">
                            <button id="cancel-form-client" class="btn-cancel">Cancelar</button>
                            <button id="add-client-form" class="btn-create">Crear</button>
                        </div>
                    </div>
                </div>
                <div class="registrar_hospedaje">
                    <h1>Detalles de la Habitacion</h1>
                    <div class="detail_habitacion">
                        <div class="card-detail">
                            <span>N° Habitacion:</span>
                            <p id="hab-ncuarto"></p>
                        </div>
                        <div class="card-detail">
                            <span>Tipo de Habitacion:</span>
                            <p id="hab-categoria"></p>
                        </div>
                        <div class="card-detail">
                            <span>Estado:</span>
                            <h1 id="hab-estado"></h1>
                        </div>
                        <div class="card-detail">
                            <span>Precio: </span>
                            <h1 id="hab-precio"></h1>
                        </div>
                    </div>
                </div>
                <div class="form-register-host">
                    <div class="card-input">
                        <div class="header-clients">
                            <span>Cliente</span>
                            <button id="new_cliente">+ Nuevo cliente</button>
                        </div>
                    </div>
                    <div class="card-input">
                        <span>Tipo de cliente</span>
                        <div class="input-group">
                            <select name="type-register" id="reserva-tipo-documento">
                                <option value="0">Seleccione el tipo de documento</option>
                                <option value="1">DNI</option>
                                <option value="2">RUC</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-input">
                        <input id="get-id" type="hidden" value="<?php echo $_GET["id"] ?>">
                        <div class="input-group">
                            <i class="fas fa-address-card"></i>
                            <input id="reserva-documento" disabled type="number" placeholder="Ingrese el numero">
                            <button id="btn-search-dni-ruc" class="btn-search">
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="card-input">
                        <div class="input-group">
                            <ion-icon name="person-circle-outline"></ion-icon>
                            <input key-documento="" id="reserva-cliente" disabled type="text" placeholder="Nombres del cliente">
                        </div>
                    </div>
                    <div class="card-input">
                        <span>Fecha de Ingreso</span>
                        <div class="input-group">
                            <ion-icon name="calendar"></ion-icon>
                            <input value="" type="date" id="reserva-ingreso" disabled>
                        </div>
                    </div>
                    <div class="card-input">
                        <span>Fecha de salida</span>
                        <div class="input-group">
                            <input type="date" id="reserva-salida">
                        </div>
                    </div>
                    <div class="card-input">
                        <span>Descuento</span>
                        <div class="input-group">
                            <i class="fas fa-dollar-sign"></i>
                            <input type="text" id="reserva-descuento" placeholder="Ingresa el descuento">
                        </div>
                    </div>
                    <div class="card-input">
                        <span>Adelanto</span>
                        <div class="input-group">
                            <i class="fas fa-dollar-sign"></i>
                            <input type="number" id="reserva-adelanto" placeholder="Ingresa el adelanto">
                        </div>
                    </div>
                    <div class="card-input">
                        <span>Total a pagar</span>
                        <div class="input-group">
                            <i class="fas fa-dollar-sign"></i>
                            <input type="number" id="reserva-total" disabled>
                        </div>
                    </div>
                    <div class="card-input">
                        <span>Total a pagar - descuento</span>
                        <div class="input-group">
                            <i class="fas fa-dollar-sign"></i>
                            <input type="number" id="reserva-total-descuento" disabled>
                        </div>
                    </div>
                    <div class="card-input">
                        <span>Observaciones</span>
                        <div class="input-group">
                            <i class="fas fa-info-circle"></i>
                            <input type="text" id="reserva-observacion" placeholder="Escribe alguna observacion de la reserva">
                        </div>
                    </div>
                </div>
                <div class="btn-actions">
                    <a class="btn-back" href="../Recepcion/">Volver</a>
                    <button class="btn-create" id="add-reserva-btn">Agregar</button>
                </div>
            <?php
            }
            ?>
        <?php } else {
        ?>
            <div class="search-piso-habs">
                <h1>Buscar por piso:</h1>
                <select name="search-piso" id="search-piso">
                </select>
            </div>
            <div class="list-habitaciones">
            </div>
        <?php } ?>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="../../js/jquery.min.js"></script>
<script src="../../components/sidebar.js"></script>
<script src="../../js/gestion_recepcion.js"></script>
<script src="../../js/gestion-registro.js"></script>
<script src="../../js/task-msg.js"></script>

</html>