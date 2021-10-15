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
    <div class="container-dashboard">
        <span class="route">
            > Home > Recepcion
        </span>
        <?php
        if (!empty($_GET["view"])) {
        ?>
            <?php
            if ($_GET["view"] = "reservar") { ?>
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
                        <span>Cliente</span>
                        <input id="get-id" type="hidden" value="<?php echo $_GET["id"] ?>">
                        <div class="input-group">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Ingresa los nombres del cliente">
                        </div>
                    </div>
                    <div class="card-input">
                        <span>Tipo de registro</span>
                        <div class="input-group">
                            <select name="type-register" id="reserva-tipo">
                                <option value="0">Seleccione el tipo de reserva</option>
                                <option value="1">Hospedaje</option>
                                <option value="2">Reserva</option>
                            </select>
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

</html>