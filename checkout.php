<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/footer.css" />
</head>

<body>

    <header>
        <div class="menu-header">
            <i class="menu-icon-header"><img src="assets/menu.svg" alt="menu-header" /></i>
            <!-- Navbar -->
            <nav class="container-nav-menu" id="nav-menu-show">

                <!-- Menú desplegable -->
                <div class="items-show">
                    <ul class="nav-menu">

                        <!-- Items del Menú | Categorías -->
                        <li class="option-nav"><span>MUJERES</span>
                            <ul class="nav-menu-items">
                                <li><a href="catalogo.html">Camisas</a></li>
                                <li>Jean</li>
                                <li>Buzos</li>
                            </ul>
                        </li>

                        <li class="option-nav"><span>HOMBRES</span>
                            <ul class="nav-menu-items">
                                <li>Camisas</li>
                                <li>Camisetas</li>
                                <li>Jean</li>
                                <li>Buzos</li>
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
                <h1>KoaShop</h1>
            </div>
        </div>
        <!-- Items del Menú -->
        <div class="header-items" id="header-items">
            <ul>
                <li>
                    <!-- Cuenta -->
                    <a href="mi-cuenta.html"><img src="assets/account.svg" alt="account-item" /></a>
                </li>
                <li class="my-favorites">
                    <!-- Productos Favoritos -->
                    <img src="assets/favorite.svg" id="icon-favorite" alt="favorite-item" />
                    <a href="favoritos.html" id="btn-favorites"><img src="assets/favorite.svg"
                            alt="favorite-item" /></a>

                    <div class="items-my-favorites" id="items-my-favorites">

                        <article class="card-favorite">
                            <img src="img/Oto-o-2019-mujeres-.jpg" alt="">
                            <ul>
                                <li>
                                    <h3>Camisa mujer Japón</h3>
                                </li>
                                <li>$20.000</li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </article>

                        <article class="card-favorite">
                            <img src="img/Oto-o-2019-mujeres-.jpg" alt="">
                            <ul>
                                <li>
                                    <h3>Camisa mujer Japón</h3>
                                </li>
                                <li>$20.000</li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </article>

                        <article class="card-favorite">
                            <img src="img/Oto-o-2019-mujeres-.jpg" alt="">
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
                    <img src="assets/shopping_cart.svg" id="icon-carrito" alt="shopping_cart-item" />

                    <div class="items-my-cart" id="items-my-cart">

                        <article class="card-favorite">
                            <img src="img/Oto-o-2019-mujeres-.jpg" alt="">
                            <ul>
                                <li>
                                    <h3>Camisa mujer Japón</h3>
                                </li>
                                <li>$20.000</li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </article>

                        <article class="card-favorite">
                            <img src="img/Oto-o-2019-mujeres-.jpg" alt="">
                            <ul>
                                <li>
                                    <h3>Camisa mujer Japón</h3>
                                </li>
                                <li>$20.000</li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </article>

                        <article class="card-favorite">
                            <img src="img/Oto-o-2019-mujeres-.jpg" alt="">
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
                    <img id="icon-login" src="assets/login.svg" alt="login-item" />
                </li>
            </ul>
        </div>
    </header>

    <main class="container-checkout">
        <h2>Checkout</h2>
        <form class="form-checkout" action="">

            <section class="inputs-checkout">
                <p>Información de Contacto</p>
                <article class="inputs-data-checkout">
                    <div class="content">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                    <div class="content">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" id="apellidos">
                    </div>
                    <div class="content">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                </article>
            </section>

            <section class="order-checkout">
                <p>Orden</p>
            </section>
        </form>
    </main>


    <footer>
        <div class="container-footer-all">
            <div class="container-body">
                <div class="colum1">
                    <h1>INFORMACION DE CONTACTO</h1>
                    <div class="row">
                        <p>jonathanvel84@gmail.com</p>
                    </div>
                    <div class="row">
                        <a href="http://www.linkedin.com/in/jonathanvel04" target="_blank"><img
                                src="assets/linkedin.svg" alt="linkedin-icon"></a>
                        <a href="https://github.com/Jonathan-04" target="_blank"><img src="assets/github2.svg"
                                alt="github-icon"></a>
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
            <div class="information"><span>© 2022 Todos los Derechos Reservados </span></div>
        </div>
    </footer>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/menu-header.js"></script>
    <script src="js/item-favorites.js"></script>
</body>

</html>