<?php

// Header
function navbar()
{
?>
    <header>
        <div class="menu-header">
            <i class="menu-icon-header"><img src="assets/icons/menu.svg" alt="menu-header" /></i>
            <!-- Navbar -->
            <nav class="container-nav-menu" id="nav-menu-show">

                <!-- Menú desplegable -->
                <div class="items-show">
                    <ul class="nav-menu">

                        <!-- Items del Menú | Categorías -->
                        <li class="option-nav"><a href="catalogo.php?catg=13&tipo="><span>MUJERES</span></a>
                            <ul class="nav-menu-items">
                                <li><a href="catalogo.php?catg=13&tipo=1">Camisas</a></li>
                                <li><a href="catalogo.php?catg=13&tipo=4">Jean</a></li>
                                <li><a href="catalogo.php?catg=13&tipo=3">Buzos</a></li>
                            </ul>
                        </li>

                        <li class="option-nav"><a href="catalogo.php?catg=14&tipo="><span>HOMBRES</span></a>
                            <ul class="nav-menu-items">
                                <li><a href="catalogo.php?catg=14&tipo=1">Camisas</a></li>
                                <li><a href="catalogo.php?catg=14&tipo=2">Camisetas</a></li>
                                <li><a href="catalogo.php?catg=14&tipo=4">Jean</a></li>
                                <li><a href="catalogo.php?catg=14&tipo=3">Buzos</a></li>
                            </ul>
                        </li>

                        <li class="option-nav"><span>GORRAS</span>
                            <ul class="nav-menu-items">
                                <li>Visora Curva</li>
                                <li>Visora Plana</li>
                            </ul>
                        </li>

                        <li class="option-nav"><span>ESTAMPADOS</span>
                            <ul class="nav-menu-items">
                                <li>Próximamente</li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-header">
            <div class="header-title">
                <a href="index.php">
                    <h1>KoaShop</h1>
                </a>
            </div>
        </div>
        <!-- Items del Menú -->
        <div class="header-items" id="header-items">
            <ul>
                <li>
                    <!-- Cuenta -->
                    <a href="mi-cuenta.php">
                        <img src="assets/icons/account.svg" alt="account-item" />
                    </a>
                </li>
                <li class="my-favorites">
                    <!-- Productos Favoritos -->
                    <img src="assets/icons/favorite.svg" id="icon-favorite" alt="favorite-item" />
                    <a href="favoritos.html" id="btn-favorites"><img src="assets/icons/favorite.svg" alt="favorite-item" /></a>

                    <div class="items-my-favorites" id="items-my-favorites">

                        <article class="card-favorite">
                            <img src="assets/img/Oto-o-2019-mujeres-.jpg" alt="">
                            <ul>
                                <li>
                                    <h3>Camisa mujer Japón</h3>
                                </li>
                                <li>$20.000</li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </article>

                        <article class="card-favorite">
                            <img src="assets/img/Oto-o-2019-mujeres-.jpg" alt="">
                            <ul>
                                <li>
                                    <h3>Camisa mujer Japón</h3>
                                </li>
                                <li>$20.000</li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </article>

                        <article class="card-favorite">
                            <img src="assets/img/Oto-o-2019-mujeres-.jpg" alt="">
                            <ul>
                                <li>
                                    <h3>Camisa mujer Japón</h3>
                                </li>
                                <li>$20.000</li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </article>

                        <a href="favoritos.html" id="ver-favorites">Ver todo</a>
                    </div>

                </li>
                <li>
                    <!-- Carrito de Compras -->
                    <img src="assets/icons/shopping_cart.svg" id="icon-carrito" alt="shopping_cart-item" />

                    <div class="items-my-cart" id="items-my-cart">

                        <article class="card-favorite">
                            <img src="assets/img/Oto-o-2019-mujeres-.jpg" alt="">
                            <ul>
                                <li>
                                    <h3>Camisa mujer Japón</h3>
                                </li>
                                <li>$20.000</li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </article>

                        <article class="card-favorite">
                            <img src="assets/img/Oto-o-2019-mujeres-.jpg" alt="">
                            <ul>
                                <li>
                                    <h3>Camisa mujer Japón</h3>
                                </li>
                                <li>$20.000</li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </article>

                        <article class="card-favorite">
                            <img src="assets/img/Oto-o-2019-mujeres-.jpg" alt="">
                            <ul>
                                <li>
                                    <h3>Camisa mujer Japón</h3>
                                </li>
                                <li>$20.000</li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </article>

                        <a href="#" id="ver-cart">Ver todo</a>
                    </div>
                </li>
                <li>
                    <!-- Login -->
                    <?php
                    if (isset($_SESSION['id'])) {
                        echo '<a href="dataBase/logout.php"><img src="assets/icons/logout.svg" alt="logout-item" /></a>';
                    } else {
                        echo '<img id="icon-login" src="assets/icons/login.svg" alt="login-item" />';
                    }
                    ?>

                </li>
            </ul>
        </div>
    </header>
<?php
}

// Formulario del Login
function formLogin()
{
?>
    <!-- Formulario de Login -->
    <div class="bg-content-form" id="bg-form-login"></div>
    <div class="content-form" id="form-login">
        <div class="content-login">
            <h1>Inicia Sesión</h1>
            <h4>
                ¿No tienes una Cuenta? <a href="registro.html">Registrate aqui!</a>
            </h4>

            <!-- Datos-->
            <form class="informacion" method="POST" enctype="multipart/form-data" action="dataBase/login-validacion.php">
                <!-- Inputs -->
                <input type="email" id="email" name="email" placeholder="Email" required />
                <input type="password" id="password" name="clave" placeholder="Contraseña" required />

                <div class="content-options">
                    <a href="#">¿Olvidaste tu Contraseña?</a>
                </div>

                <input type="submit" value="Ingresar" id="Ingresar" name="Ingresar" />

                <p id="btn-cerrar-login">Cerrar</p>
            </form>
        </div>
    </div>
<?php
}

// Footer
function footer()
{
?>
    <footer>
        <div class="container-footer-all">
            <div class="container-body">
                <div class="colum1">
                    <h1>INFORMACION DE CONTACTO</h1>
                    <div class="row">
                        <p>jonathanvel84@gmail.com</p>
                    </div>
                    <div class="row">
                        <a href="http://www.linkedin.com/in/jonathanvel04" target="_blank"><img src="assets/icons/linkedin.svg" alt="linkedin-icon"></a>
                        <a href="https://github.com/Jonathan-04" target="_blank"><img src="assets/icons/github2.svg" alt="github-icon"></a>
                    </div>
                </div>
                <div class="colum2">
                    <h1>TERMINOS Y POLITICAS</h1>
                    <div class="row2">
                        <a href="">Terminos y Condiciones de ventas</a>
                    </div>
                    <div class="row2">
                        <a class="row3" href="">Politicas de Envio</a>
                    </div>
                    <div class="row2">
                        <a class="row3" href="">Cambios y Devoluciones</a>
                    </div>
                    <div class="row2">
                        <a class="row3" href="">Promociones</a>
                    </div>
                    <div class="row2">
                        <a class="row3" href="">Tratamiento de Datos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-footer">
            <div class="copyright"> <a href="">Terminos y Condiciones |</a> <a href="">DomiShop</a> </div>
        </div>
    </footer>
<?php
}

// Filtro de la cuenta del Usuario
function filtroUsuario()
{
?>
    <aside class="container-cuentaUsuario">
        <div class="container-filtro">
            <ul class="filtro-usuario">
                <li><a href="mi-cuenta.php" id="info-personal">Informacion Personal</a></li>
                <li><a href="compras.php" id="compras-usuario"">Mis Compras</a></li>
            <li><a href=" favoritos.php" id=" favoritos-usuario">Favoritos</a></li>
            </ul>
        </div>
    </aside>
<?php
}
