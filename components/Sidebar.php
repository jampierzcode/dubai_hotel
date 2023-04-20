<nav class="navbar-dashboard">
    <div class="drop-down-menu">
        <ion-icon name="reorder-three-outline"></ion-icon>
    </div>
    <div class="user-login" style="gap: 20px">
        <!-- <FaBell /> campanas-->
        <!-- <img src="../../img/jampier.jpg" alt="img_avatar_user" /> -->
        <img src="https://www.pngkit.com/png/detail/115-1150342_user-avatar-icon-iconos-de-mujeres-a-color.png" alt="img_avatar_user" />
        <p><?php echo $_SESSION["nombres"] ?></p>
    </div>
</nav>
<div class="overlay-sidebar"></div>
<aside class="aside-dashboard">
    <div class="header-aside">
        <div class="logo">
            <!-- <img src="../img/logo.jpg" alt="logo-img" class="logo-icon" /> -->
            <ion-icon name="bed-outline"></ion-icon>
            <p>Hotel Emperador</p>
        </div>
    </div>
    <div class="main">
        <div class="perfil-user">
            <img src="https://www.pngkit.com/png/detail/115-1150342_user-avatar-icon-iconos-de-mujeres-a-color.png" alt="img_avatar_user" />
            <p><?php echo $_SESSION["nombres"] ?></p>
        </div>
        <ul class="nav-links">