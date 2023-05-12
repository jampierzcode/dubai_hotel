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
    <link rel="stylesheet" href="../../css/ventas.css">

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
                <a class="toggle-drop active-link" href="../Ventas">
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
            > Home > Ventas
        </span>
        <?php
        if (!empty($_GET["view"])) {
        ?>
            <?php
            if ($_GET["view"] = "vender") { ?>
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
                </div>
                <div class="carrito_ventas">
                    <div class="card-detail">
                        <span>Producto</span>
                        <select name="producto" id="carrito_producto">
                        </select>
                    </div>
                    <div class="card-detail">
                        <span>Cantidad</span>
                        <input id="carrito_cantidad" value="1" min="1" type="number">
                    </div>
                    <div class="card-detail">
                        <span>Precio</span>
                        <input id="carrito_precio" key_price="" disabled type="text">
                    </div>
                    <div class="card-detail">
                        <button id="add-carrito" class="btn-add-producto">+ Agregar</button>
                    </div>
                </div>
                <div class="list-productos-add">
                    <div class="campo_tabla">
                        <p>Opciones</p>
                        <p>Producto</p>
                        <p>Precio Unitario</p>
                        <p>Cantidad</p>
                        <p>Subtotal</p>
                    </div>
                    <div id="list_campos" class="campo_tabla_list">

                    </div>
                    <div class="total_price">
                        <h1>Total:</h1>
                        <div class="last-option" id="total-price-product">s/0.00</div>
                    </div>
                    <div class="total_price">
                        <h1>Modo de pago:</h1>
                        <div class="select_pago_modo last-option">
                            <label><input type="radio" value="0" name="option_pago" id="option_pago"> PAGAR AHORA</label>
                            <label><input type="radio" value="1" name="option_pago" id="option_pago"> PAGAR LUEGO</label>
                        </div>
                    </div>
                </div>
                <div class="buttons_venta">
                    <a href="../Ventas/">Volver</a>
                    <button id="guardar_venta" class="btn-continue">Gardar venta</button>
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
<?php
if (!empty($_GET["view"])) {
    if ($_GET["view"] = "vender") {
?>
        <script src="../../js/dinamic/carrito_ventas.js"></script>
        <script src="../../js/dinamic/gestion-ventas.js"></script>
    <?php

    }
} else {
    ?>
    <script src="../../js/dinamic/habs_ocupadas.js"></script>
<?php
}
?>
<script src="../../components/sidebar.js"></script>
<!-- <script src="../../js/task-msg.js"></script> -->

</html>