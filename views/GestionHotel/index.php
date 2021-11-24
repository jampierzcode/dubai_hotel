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
    <link rel="stylesheet" href="../../css/chart.css">
    <link rel="stylesheet" href="../../css/gestionhotel.css">
    <link rel="icon" href="../../img/logo.jpg">
    <title>Hotel Dubai / Gestion</title>
</head>

<body>
    <?php
    include_once "../../components/Sidebar.php"
    ?>
    <li class="links-menu-dashboard">
        <div class="link-block">
            <div class="left-link">
                <a class="toggle-drop active-link" href="../GestionHotel">
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
            > Home
        </span>
        <div class="cards-admin">
            <div class="card-count">
                <div class="left-card">
                    <h1>N° Reservas</h1>
                    <span>20</span>
                </div>
                <ion-icon name="calendar-outline"></ion-icon>
            </div>
            <div class="card-count">
                <div class="left-card">
                    <h1>N° Clientes</h1>
                    <span>20</span>
                </div>
                <ion-icon name="people-outline"></ion-icon>
            </div>
            <div class="card-count">
                <div class="left-card">
                    <h1>N° Habitaciones</h1>
                    <span>20</span>
                </div>
                <ion-icon name="bed-outline"></ion-icon>
            </div>
            <div class="card-count ventas">
                <div class="left-card">
                    <h1>Venta Total</h1>
                    <span>S/16 000.00</span>
                </div>
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
        <canvas id="myChart" width="150"></canvas>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="../../js/jquery.min.js"></script>
<script src="../../components/sidebar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../js/graficos-admin.js"></script>

</html>