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
    <link rel="stylesheet" href="../../css/habitaciones.css">
    <link rel="icon" href="../../img/logo.jpg">
    <title>Hotel Dubai / Gestion</title>
</head>

<body>
    <?php
    include_once "../../components/Sidebar.php"
    ?>
    <div class="container-dashboard">
        <span class="route">
            > Home > Habitaciones
        </span>

        <?php
        if (!empty($_GET["view"])) {
        ?>
            <!-- Crear la habitacion vista -->
            <?php if ($_GET["view"] == "new-habitacion") { ?>
                <div class="create-habs">
                    <h1 class="title-action">Crear Habitacion</h1>
                    <div class="form-add" id="form-habs">
                        <div class="content-form">
                            <div class="group-date">

                                <span>N° Habitacion</span>
                                <input id="habs-numero" type="number" placeholder="Numero de habitacion">
                            </div>
                            <div class="group-date">
                                <span>Piso</span>
                                <select name="piso" id="habs-piso">
                                </select>
                            </div>
                            <div class="group-date">
                                <span>Categoria</span>
                                <select name="piso" id="habs-cat">

                                </select>
                            </div>
                        </div>
                        <div class="actions-button">
                            <button id="habs-btn-add" class="btn-add-create">Agregar</button>
                            <a href="../Habitaciones/" class="btn-cancel-create">Cancelar</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Crear la categoria de la habitacion -->

            <?php if ($_GET["view"] == "new-categoria") { ?>
                <div class="create-habs-cat hidden">
                    <h1 class="title-action">Crear Categoria</h1>
                    <div class="form-add" id="form-habs">
                        <div class="content-form">
                            <div class="group-date">

                                <span>Categoria</span>
                                <input id="categoria-nombre" type="text" placeholder="Nombre de la Categoria">
                            </div>
                            <div class="group-date">

                                <span>Precio</span>
                                <input id="categoria-precio" type="number" placeholder="Precio de la Categoria">
                            </div>


                        </div>
                        <div class="actions-button">
                            <button id="cat-habs-btn-add" class="btn-add-create">Agregar</button>
                            <a href="../Habitaciones/" class="btn-cancel-create">Cancelar</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if ($_GET["view"] == "new-piso") { ?>
                <div class="create-habs-piso hidden">
                    <h1 class="title-action">Crear Piso</h1>
                    <div class="form-add" id="form-habs">
                        <div class="content-form">
                            <div class="group-date">

                                <span>Piso</span>
                                <input id="piso-nombre" type="text" placeholder="Numero de piso">
                            </div>


                        </div>
                        <div class="actions-button">
                            <button id="piso-habs-btn-add" class="btn-add-create">Agregar</button>
                            <a href="../Habitaciones/" class="btn-cancel-create">Cancelar</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Crear el piso de la habitacion -->
        <?php
        } else { ?>

            <div class="links-container">
                <a href="?view=new-habitacion" id="ancla-add-hab" class="btn-add">
                    + Nueva Habitacion
                </a>
                <a href="?view=new-categoria" id="ancla-add-cat" class="btn-add">
                    + Nueva Categoria
                </a>
                <a href="?view=new-piso" id="ancla-add-cat" class="btn-add">
                    + Nuevo Piso
                </a>
            </div>

            <div class="tables">
                <div class="table-container">
                    <h1 class="title-table">Habitaciones</h1>
                    <div class="section-search">
                        <input type="text" placeholder="Ingrese el nombre del cliente">
                        <ion-icon id="search-btn" name="search-sharp"></ion-icon>
                    </div>
                    <table>
                        <tr>
                            <th># id</th>
                            <th>Numero de Habitacion</th>
                            <th>Tipo de Habitacion</th>
                            <th>Piso</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                        <tbody id="list-habitaciones">
                        </tbody>
                    </table>
                </div>
                <div class="table-container">
                    <h1 class="title-table">Categorias</h1>
                    <div class="section-search">
                        <input type="text" placeholder="Ingrese el nombre del cliente">
                        <ion-icon id="search-btn" name="search-sharp"></ion-icon>
                    </div>
                    <table>
                        <tr>
                            <th># id</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </tr>
                        <tbody id="list-categorias">

                        </tbody>
                    </table>
                </div>
                <div class="table-container">
                    <h1 class="title-table">Pisos</h1>
                    <div class="section-search">
                        <input type="text" placeholder="Ingrese el nombre del cliente">
                        <ion-icon id="search-btn" name="search-sharp"></ion-icon>
                    </div>
                    <table>
                        <tr>
                            <th># id</th>
                            <th>Pisos</th>
                            <th>Acciones</th>
                        </tr>
                        <tbody id="list-pisos">

                        </tbody>
                    </table>
                </div>
            </div>

        <?php } ?>


    </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="../../js/jquery.min.js"></script>
<script src="../../components/sidebar.js"></script>
<?php if (!empty($_GET["view"])) { ?>
    <?php if ($_GET["view"] == "new-habitacion") { ?>

        <script src="../../js/create-hab.js"></script>
    <?php } ?>
    <?php if ($_GET["view"] == "new-categoria") { ?>

        <script src="../../js/create-cats-habs.js"></script>
    <?php } ?>
    <?php if ($_GET["view"] == "new-piso") { ?>

        <script src="../../js/create-piso-habs.js"></script>
    <?php } ?>
<?php } else { ?>
    <script src="../../js/gestionhab.js"></script>

<?php } ?>

</html>