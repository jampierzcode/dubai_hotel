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
    <link rel="stylesheet" href="../../css/productos.css">
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
                <a class="toggle-drop active-link" href="../Productos">
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
            > Home > Productos
        </span>

        <div id="modal-create-product" class="modal-create md-hidden">
            <div class="form-create">
                <!-- <form id="form_producto_add"> -->
                <div class="close-modal">
                    <ion-icon name="close-outline"></ion-icon>
                </div>
                <h1>Crear Producto</h1>
                <div class="card-input">
                    <span>Nombre del producto</span>
                    <div class="input-group">
                        <input type="text" id="producto-nombre" placeholder="Ingrese el nombre del producto">
                    </div>
                </div>
                <div class="card-input">
                    <span>Precio</span>
                    <div class="input-group">
                        <input type="number" id="producto-precio" placeholder="Ingrese el precio del producto">
                    </div>
                </div>
                <div class="card-input">
                    <span>Stock</span>
                    <div class="input-group">
                        <input type="number" id="producto-inventario" placeholder="Ingrese la cantidad de productos en tienda">
                    </div>
                </div>
                <!-- <div class="card-input">
                        <span>Imagen</span>
                        <div class="input-group">
                            <input type="file" name="imagen_producto" id="producto-image">
                            <input type="hidden" name="funcion" value="subir_foto_producto">
                        </div>
                    </div> -->
                <div class="card-input buttons-modal">
                    <button id="cancel-form" class="btn-cancel">Cancelar</button>
                    <button id="add-producto-form" class="btn-create">Crear</button>
                </div>
                <!-- </form> -->
            </div>
        </div>
        <div id="modal-edit-product" class="modal-create md-hidden">
            <div class="form-create">
                <!-- <form id="form_producto_add"> -->
                <div class="close-modal">
                    <ion-icon name="close-circle-outline"></ion-icon>
                </div>
                <h1>Editar Producto</h1>
                <div class="card-input">
                    <span>Nombre del producto</span>
                    <div class="input-group">
                        <input type="text" id="producto-nombre" placeholder="Ingrese el nombre del producto">
                    </div>
                </div>
                <div class="card-input">
                    <span>Precio</span>
                    <div class="input-group">
                        <input type="number" id="producto-precio" placeholder="Ingrese el precio del producto">
                    </div>
                </div>
                <div class="card-input">
                    <span>Stock</span>
                    <div class="input-group">
                        <input type="number" id="producto-inventario" placeholder="Ingrese la cantidad de productos en tienda">
                    </div>
                </div>
                <div class="card-input buttons-modal">
                    <button id="cancel-form" class="btn-cancel">Cancelar</button>
                    <button id="update-producto-form" class="btn-create">Actualizar</button>
                </div>
                <!-- </form> -->
            </div>
        </div>
        <div class="create-productos">
            <button id="create-productos" class="btn-add">+ Crear</button>
        </div>
        <div class="list-productos">
            <p>Lista de productos</p>
            <div class="productos-header-table">
                <p class=" campo_tabla">Nombre</p>
                <p class="campo_tabla">Precio</p>
                <p class="campo_tabla">Stock</p>
                <p class="campo_tabla">Actions</p>
            </div>
            <div id="productos-body-table">
            </div>
        </div>

    </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="../../js/jquery.min.js"></script>
<script src="../../components/sidebar.js"></script>
<script src="../../js/gestion-productos.js"></script>

</html>