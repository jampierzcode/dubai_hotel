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
                <a class="toggle-drop active-link" href="../Habitaciones">
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
                <a class="toggle-drop" href="../Reservas">
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
            > Home > Habitaciones
        </span>
        <div id="modal-edit-habs" class="modal-create md-hidden">
            <div class="form-create">
                <!-- <form id="form_producto_add"> -->
                <div class="close-modal">
                    <ion-icon name="close-circle-outline"></ion-icon>
                </div>
                <h1 class="title-modal"></h1>
                <div id="list-campos" style="display: flex; flex-direction: column; gap: 15px">

                </div>
                <div class="card-input buttons-modal">
                    <button id="cancel-form" class="btn-cancel">Cancelar</button>
                    <button id="update-producto-form" class="btn-create">Actualizar</button>
                </div>
                <!-- </form> -->
            </div>
        </div>

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
                        <div class="container-caract"> 
                            <h1 class="title-action">Caracteristicas</h1>      
                            <p>Seleccione una de las siguientes caracteristicas</p>                   
                            <div class="list-caracteristicas">
                                <div class="target-car">Desayuno</div>
                                <div class="target-car">Mesa de estudio</div>
                                <div class="target-car">Pisos alfombrados</div>
                                <div class="target-car">Baño privado</div>
                                <div class="target-car">Agua caliente</div>
                                <div class="target-car">Agua caliente y fria con sistema de therma y rapiducha</div>
                                <div class="target-car">TV LCD con cable</div>
                                <div class="target-car">Telefono con discado directo</div>
                                <div class="target-car">Internet Wifi</div>
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
                    <!-- <div class="section-search">
                        <input type="text" placeholder="Ingrese el nombre del cliente">
                        <ion-icon id="search-btn" name="search-sharp"></ion-icon>
                    </div> -->
                    <table>
                        <tr>
                            <th># id</th>
                            <th>Numero de Habitacion</th>
                            <th>Categoria/Tipo</th>
                            <th>Piso</th>
                            <th>Acciones</th>
                        </tr>
                        <tbody id="list-habitaciones">
                        </tbody>
                    </table>
                </div>
                <div class="table-container">
                    <h1 class="title-table">Categorias</h1>
                    <!-- <div class="section-search">
                        <input type="text" placeholder="Ingrese el nombre del cliente">
                        <ion-icon id="search-btn" name="search-sharp"></ion-icon>
                    </div> -->
                    <table>
                        <tr>
                            <th># id</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                        <tbody id="list-categorias">

                        </tbody>
                    </table>
                </div>
                <div class="table-container">
                    <h1 class="title-table">Pisos</h1>
                    <!-- <div class="section-search">
                        <input type="text" placeholder="Ingrese el nombre del cliente">
                        <ion-icon id="search-btn" name="search-sharp"></ion-icon>
                    </div> -->
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="../../js/jquery.min.js"></script>
<script src="../../components/sidebar.js"></script>
<?php if (!empty($_GET["view"])) { ?>
    <?php if ($_GET["view"] == "new-habitacion") { ?>

        <script src="../../js/dinamic/create-hab.js"></script>
    <?php } ?>
    <?php if ($_GET["view"] == "new-categoria") { ?>

        <script src="../../js/dinamic/create-cats-habs.js"></script>
    <?php } ?>
    <?php if ($_GET["view"] == "new-piso") { ?>

        <script src="../../js/dinamic/create-piso-habs.js"></script>
    <?php } ?>
<?php } else { ?>
    <script src="../../js/dinamic/gestionhab.js"></script>

<?php } ?>

</html>