<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/navdashboard.css">
    <link rel="stylesheet" href="../css/container-dashboard.css">
    <link rel="stylesheet" href="../css/chart.css">
    <link rel="stylesheet" href="../css/gestionhotel.css">
    <link rel="icon" href="../img/logo.jpg">
    <title>Hotel Dubai / Gestion</title>
</head>

<body>
    <?php
    include_once "../components/Sidebar.php"
    ?>
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
<script src="../js/jquery.min.js"></script>
<script src="../components/sidebar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.esm.js" integrity="sha512-IPqefcmFCuGcYxl/uIjvyCXwh5T9+EB2MFT7W9RUZd20d7PLfgdT975xdhyesvdXH6Au8SyXOw1236LY1lFl5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.esm.min.js" integrity="sha512-2Vi/lCX8NaXlAhzc28RAoteYAiJVoz4y3Xq/IpHQCw7KU25I34fDqJSVSUml2tQRVYFnf3IMy6O59zKJh79hiw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js" integrity="sha512-b3xr4frvDIeyC3gqR1/iOi6T+m3pLlQyXNuvn5FiRrrKiMUJK3du2QqZbCywH6JxS5EOfW0DY0M6WwdXFbCBLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/helpers.esm.js" integrity="sha512-/2SCtwX/TWXQ8kJN8MhCXL5GQJkBhh5J184Uy/totMp+1pFXTQhV/hMMYHuSl+juR5WO9i11AvywRgYFotRIug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/helpers.esm.min.js" integrity="sha512-b3xZ1Eh852+/Ltha4XJd59YP2d+I+B6NPdB4H+Wns29GX9x5pLwlp8jnQtJYog3d5Xk1SWvhT2lgJDDBvpV0ow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../js/graficos-admin.js"></script>

</html>