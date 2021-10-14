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
    <link rel="stylesheet" href="../css/clientes.css">
    <link rel="icon" href="../img/logo.jpg">
    <title>Hotel Dubai / Gestion</title>
</head>

<body>
    <?php
    include_once "../components/Sidebar.php"
    ?>
    <div class="container-dashboard">
        <span class="route">
            > Home > CLientes
        </span>
        <button id="ancla-add" class="btn-add">
            Agregar Cliente
        </button>
        <div class="create-clients hidden">
            <div class="form-add" id="form-clients">
                <div class="content-form">
                    <div class="group-date">

                        <span>Nombres y Apellidos</span>
                        <input type="text" placeholder="Ingresa el nombre del cliente">
                    </div>
                    <div class="group-date">
                        <span>DNI</span>
                        <input type="number" placeholder="Ingresa el dni del cliente">
                    </div>
                    <div class="group-date">
                        <span>Correo</span>
                        <input type="email" placeholder="Ingresa el @correo del cliente">
                    </div>
                    <div class="group-date">
                        <span>Telefono</span>
                        <input type="number" placeholder="Ingresa el telefono del cliente">
                    </div>
                    <div class="group-date">
                        <span>Pais</span>
                        <input type="text" placeholder="Ingresa el pais del cliente">
                    </div>
                </div>
                <div class="actions-button">
                    <button class="btn-add-create">Agregar</button>
                    <button class="btn-cancel-create">Cancelar</button>
                </div>
            </div>
        </div>
        <h1 class="title-section">Mis Clientes</h1>
        <div class="table-container">

            <div class="section-search">
                <input type="text" placeholder="Ingrese el nombre del cliente">
                <ion-icon id="search-btn" name="search-sharp"></ion-icon>
            </div>
            <table>
                <tr>
                    <th># id</th>
                    <th>Nombres y Apellidos</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>DNI</th>
                    <th>Pais</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>JampierSmith Vasquez Mija</td>
                    <td>+51 915096462</td>
                    <td>jampierv127@gmail.com</td>
                    <td>74421968</td>
                    <td>Peru</td>
                    <td>
                        <ion-icon id="edit-client" name="pencil-sharp"></ion-icon>
                        <ion-icon id="remove-client" name="trash"></ion-icon>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hector Emilio</td>
                    <td>+51 915096462</td>
                    <td>hectoremilio@gmail.com</td>
                    <td>29236044</td>
                    <td>Peru</td>
                    <td>
                        <ion-icon id="edit-client" name="pencil-sharp"></ion-icon>
                        <ion-icon id="remove-client" name="trash"></ion-icon>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../components/sidebar.js"></script>
<script src="../js/gestionclient.js"></script>

</html>