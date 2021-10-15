<nav class="navbar-dashboard">
    <div class="drop-down-menu">
        <ion-icon name="reorder-three-outline"></ion-icon>
    </div>
    <div class="user-login">
        <!-- <FaBell /> campanas-->
        <img src="../../img/jampier.jpg" alt="img_avatar_user" />
    </div>
</nav>
<div class="overlay-sidebar"></div>
<aside class="aside-dashboard">
    <div class="header-aside">
        <div class="logo">
            <!-- <img src="../img/logo.jpg" alt="logo-img" class="logo-icon" /> -->
            <ion-icon name="bed-outline"></ion-icon>
            <p>Hotel Dubai</p>
        </div>
    </div>
    <div class="main">
        <div class="perfil-user">
            <img src="../../img/jampier.jpg" alt="img_avatar_user" />
            <p><?php echo $_SESSION["nombres"] ?></p>
        </div>
        <ul class="nav-links">
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
                        <a class="toggle-drop" href="../controlador/LogoutController.php">
                            <ion-icon name="chevron-back-circle-sharp"></ion-icon>
                            <p>Cerrar sesión</p>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>