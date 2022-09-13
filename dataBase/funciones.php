<?php
function getDatosCuenta()
{
?>
    <?php

    require 'conexion.php';

    if (isset($_SESSION['id'])) {

        $sql = "SELECT * FROM usuarios WHERE id = '" . $_SESSION['id'] . "' ";

        $ejecutar = $conexion->prepare($sql);
        $ejecutar->execute();

        $user = $ejecutar->fetch(PDO::FETCH_ASSOC);
    ?>

        <!-- DATOS DE CUENTA-->
        <div class="detalle-informacion1">
            <h2>Datos de Cuenta</h2>
            <ul class="informacion-usuario1">
                <li>E-mail: <?php echo $user['email']; ?> </li>
            </ul>
        </div>

        <!-- DATOS PERSONALES-->
        <div class="detalle-informacion2">
            <h2>Datos Personales</h2>
            <ul class="informacion-usuario1">
                <li>Nombre: <?php echo $user['nombre']; ?></li>
                <li>Apellidos: <?php echo $user['apellidos']; ?></li>
                <li>Documento: <?php echo $user['cedula']; ?></li>
            </ul>
        </div>

        <!-- DATOS DIRECCION -->
        <?php
        if ($user['direccion'] === null) {
            echo '
            <div class="detalle-direccion">
            <h2>Aún no ha proporcionado una Dirección, por favor edite su información para agregarla.</h2>
            </div>
            ';
        } else {
        ?>
            <div class="detalle-direccion">
                <h2>Direccion</h2>

                <div class="cuadros-direccion">
                    <div class="direccion-usuario">
                        <ul class="item-direccion">
                            <li id="ciudad"><?php echo $user['ciudad']; ?></li>
                            <li id="direccion"><?php echo $user['direccion']; ?></li>
                            <li id="barrio"><?php echo $user['barrio']; ?></li>
                            <li id="observaciones">Observaciones:
                                <?php echo $user['observaciones']; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <a href="#" class="editar-informacionUsuario" id="editar_informacion">Editar</a>
        <?php
    }
    $conexion = null;
}

function getProductosColeccion()

{
    require 'conexion.php';

    $sql = "SELECT referencia, titulo, precio, imagen1 FROM productos ORDER BY productos.fecha_creacion DESC";

    $ejecutar = $conexion->prepare($sql);
    $ejecutar->execute();
    $producto = $ejecutar->fetchAll();

    if ($ejecutar->rowCount() > 0) {

        foreach ($producto as $filas) {
        ?>
            <article class="cards" id="cards-colection">
                <a class="container-cards-img" href="detalles-producto.php?referencia=<?php echo $filas['referencia'] ?>">
                    <img src="dataBase/imagen_productos/<?php echo $filas['imagen1']; ?>" class="img-front" alt="img-product" />
                    <img src="dataBase/imagen_productos/<?php echo $filas['imagen1']; ?>" class="img-back" alt="img-product" />
                </a>
                <h3><?php echo $filas['titulo']; ?></h3>
                <p>$ <?php echo $filas['precio']; ?></p>
                <div class="options-cards">
                    <p id='add-favorite'><span><img src='assets/icons/favorite.svg' alt='favorite-item' /> </span></p>
                    <p><span><img src='assets/icons/shopping_cart.svg' alt='shopping_cart-item' /> </span></p>
                </div>
            </article>
        <?php
        }
    }
}

function getDetallesProducto()
{
    require 'conexion.php';

    $sql = "SELECT * FROM productos WHERE referencia = '" . $_GET['referencia'] . "' ";

    $ejecutar = $conexion->prepare($sql);
    $ejecutar->execute();

    if ($ejecutar->rowCount() > 0) {

        $item = $ejecutar->fetch(PDO::FETCH_ASSOC);

        ?>
        <article class="container-image">
            <!-- IMAGENES DEL PRODUCTO -->
            <div class="detalles-producto-imagen product-image2">
                <img class="image-product2" id="imagenPrincipal" src="dataBase/imagen_productos/<?php echo $item['imagen1']; ?>">
            </div>
            <div class="detalles-producto-imagen product-image1">
                <img class="image-product1" src="dataBase/imagen_productos/<?php echo $item['imagen1']; ?>" onclick=" mostrarImagen(this)">
                <img class="image-product1" src="assets/img/Oto-o-2019-mujeres-.jpg" onclick="mostrarImagen(this)">
                <img class="image-product1" src="assets/img/Oto-o-2019-mujeres-Casual-blusa-blanca-coreana-de-man.jpg" onclick="mostrarImagen(this)">
                <img class="image-product1" src="assets/img/Oto-o-2019-mujeres-.jpg" onclick="mostrarImagen(this)">
            </div>
        </article>

        <!-- ITEMS DETALLES DEL PRODUCTO-->
        <div class="detalles-producto">

            <h1 class="titulo_producto">
                <?php echo $item['titulo']; ?>
            </h1>
            <h2 class="referencia_producto">
                <?php echo $item['referencia']; ?>
            </h2>
            <label class="precio_producto">$ <?php echo $item['precio']; ?>
            </label>

            <!-- SELECICION DEL COLOR-->
            <p class="color_producto">Color: </p>

            <select class="seleccion_color_producto" name="" id="seleccion_color_producto">

                <option value="none">--</option>
                <option value="Blanco">Blanco</option>
                <option value="Negro">Negro</option>

            </select>

            <!-- SELECCION DE TALLA -->
            <p class="talla_producto">Talla:</p>

            <select class="seleccion_talla_producto" name="genero" id="genero">

                <option value="none">--</option>
                <option value="<?php echo $item['talla'] ?>"><?php echo $item['talla']; ?></option>


            </select>

            <!-- CANTIDAD A LLEVAR -->
            <p class="cantidad_producto">Cantidad:</p>

            <div class="seleccion_cantidad_producto">
                <input type="number" value="1">
            </div>
            <a href="checkout.php" class="btn-comprar">Comprar</a>
            <button class="btn-add-carrito">Agregar al Carrito</button>
        </div>

        <div class="detalles-secundarios-producto">
            <p><span>Disponible:</span> <?php echo $item['stock']; ?> Unidades</p>
            <p><span>Descripción:</span> <?php echo $item['descripcion']; ?></p>
        </div>
        <?php
    }
}


function getFavorites()
{

    require 'conexion.php';

    $sql = "SELECT titulo, imagen1, precio 
            FROM productos
            INNER JOIN favoritos
            ON productos.referencia = favoritos.referencia_producto
            WHERE id_usuario = '" . $_SESSION['id'] . "' ";

    $ejecutar = $conexion->prepare($sql);
    $ejecutar->execute();
    $favoritos = $ejecutar->fetchAll();

    if ($ejecutar->rowCount() > 0) {

        foreach ($favoritos as $favorito) {
        ?>
            <article class="card-favorite">
                <img src="dataBase/imagen_productos/<?php echo $favorito['imagen1']; ?>" alt="image-product">
                <ul>
                    <li>
                        <h3><?php echo $favorito['titulo']; ?></h3>
                    </li>
                    <li>$ <?php echo $favorito['precio']; ?></li>
                    <li><a href="#">Eliminar</a></li>
                </ul>
            </article>
        <?php
        }
    } else {
        ?>
        <h2 class="title-no-favorites">Aún no tienes Favoritos</h2>
        <?php

    }
}

function getFavoritesAccount()
{

    require 'conexion.php';

    $sql = "SELECT *
            FROM productos
            INNER JOIN favoritos
            ON productos.referencia = favoritos.referencia_producto
            WHERE id_usuario = '" . $_SESSION['id'] . "' ";

    $ejecutar = $conexion->prepare($sql);
    $ejecutar->execute();
    $favoritos = $ejecutar->fetchAll();

    if ($ejecutar->rowCount() > 0) {

        foreach ($favoritos as $favorito) {
        ?>
            <article class="items-favoritos">
                <div class="style-favoritos">
                    <div class="imagen-favorito">
                        <a href="#"><img src="dataBase/imagen_productos/<?php echo $favorito['imagen1']; ?>"></a>

                    </div>
                    <div class="info-favorito">
                        <h2> <?php echo $favorito['titulo']; ?></h2>
                        <p>$ <?php echo $favorito['precio']; ?></p>
                        <?php
                        if ($favorito['estatus'] === 0) {
                            echo '<p>Estado: <label id="estado-favorito-on">Disponible</label></p>';
                        } else {
                            echo '<p>Estado: <label id="estado-favorito-off">No Disponible</label></p>';
                        }
                        ?>

                        <p>Vendidos (23)</p>
                    </div>
                </div>
            </article>
        <?php
        }
    } else {
        ?>
        <h2 class="title-no-favorites">Aún no tienes Favoritos</h2>
<?php

    }
}
