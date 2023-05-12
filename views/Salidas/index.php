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
    <link rel="stylesheet" href="../../css/salida.css">

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
                <a class="toggle-drop" href="../Recepcion">
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
                <a class="toggle-drop active-link" href="../Salidas">
                    <ion-icon name="log-out-outline"></ion-icon>
                    <p>Salidas</p>
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
        <span class="route">
            > Home > Salidas
        </span>
        <?php
        if (!empty($_GET["view"])) {
        ?>
            <?php
            if ($_GET["view"] = "verificacion") { ?>

                <div class="check-out-habs">

                    <input id="get-id" type="hidden" value="<?php echo $_GET["id"] ?>">

                    <div class="registrar_hospedaje">
                        <h1 key_reserva="" id="reserva_key">Detalles de la reserva</h1>
                        <div class="detail_habitacion">
                            <div class="card-detail">
                                <span>N° Habitacion:</span>
                                <p id="hab-ncuarto"></p>
                            </div>
                            <div class="card-detail">
                                <span>Precio por dia:</span>
                                <p id="hab-precio"></p>
                            </div>
                            <div class="card-detail">
                                <span>Tipo de Habitacion:</span>
                                <p id="hab-categoria"></p>
                            </div>
                            <div class="card-detail">
                                <span>N° documento del cliente:</span>
                                <p id="hab-cliente_documento"></p>
                            </div>
                            <div class="card-detail">
                                <span>Cliente:</span>
                                <p id="hab-cliente"></p>
                            </div>
                            <div class="card-detail">
                                <span>Fecha entrada: </span>
                                <p id="hab-fecha_entrada"></p>
                            </div>
                            <div class="card-detail">
                                <span>Fecha salida: </span>
                                <p id="hab-fecha_salida"></p>
                            </div>
                        </div>
                    </div>
                    <div class="detalles_servicios">
                        <h1 class="title_servicio">Detalles de alojamiento</h1>
                        <div class="table-detail">
                            <div class="header-table">
                                <p class="column_tabla">Costo Alojamiento</p>
                                <p class="column_tabla">Descuento</p>
                                <p class="column_tabla">Dinero de adelanto</p>
                                <p class="column_tabla">Mora o penalidad</p>
                                <p class="column_tabla danger">Por pagar</p>
                            </div>
                            <div id="list_campos_reserva" class="body-table">
                            </div>
                        </div>
                    </div>
                    <div class="detalles_servicios">
                        <h1 class="title_servicio">Detalles de consumo</h1>
                        <div class="table-detail" id="table_consumo">
                        </div>
                    </div>

                    <div class="total_price">
                        <h1 class="pre-last-title">Total a pagar:</h1>
                        <div class="last-option total-pago" id="total-pagar">s/0.00</div>
                    </div>
                </div>
                <div class="buttons_venta">
                    <a href="../Salidas/">Volver</a>
                    <button id="cerrar_reserva" class="btn-continue">Culminar y limpiar habitacion</button>
                </div>
            <?php
            }
            ?>
        <?php } else {
        ?>
            <div class="list-habitaciones">
            </div>
        <?php } ?>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="../../js/jquery.min.js"></script>
<script src="../../components/sidebar.js"></script>
<?php
if (!empty($_GET["view"])) {
    if ($_GET["view"] = "verificacion") {
?>
        <script src="../../js/dinamic/gestion-salidas.js"></script>
    <?php
    }
} else {
    ?>
    <script src="../../js/dinamic/habs_ocupadas.js"></script>
<?php
}
?>
<!-- <script src="../../js/task-msg.js"></script> -->

</html>