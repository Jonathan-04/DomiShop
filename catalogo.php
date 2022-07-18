<?php

include_once 'components/component.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Línea de ropa moderna con una excelente calidad" />
  <title>Catálogo</title>

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/cards.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="css/catalogo.css" />
</head>

<body>

  <!-- HEADER -->
  <?php echo navbar(); ?>

  <!-- Formulario del Login -->
  <?php echo formLogin(); ?>

  <div class="container-catg">
    <!-- Filtro -->
    <aside class="container-filtro">
      <div class="show-filter" id="bg-filter"></div>
      <p id="show-filter">Filtro</p>
      <ul class="container-items-filtro" id="container-filtro">
        <li class="items-filtro">
          <span>Categoría</span>
          <ul class="select-items ks-cboxtags">
            <li>
              <input type="checkbox" id="1" value="#" /><label for="1">Camisas</label>
            </li>
            <li>
              <input type="checkbox" id="2" value="#" /><label for="2">Camisetas</label>
            </li>
            <li>
              <input type="checkbox" id="3" value="#" /><label for="3">Buzos</label>
            </li>
            <li>
              <input type="checkbox" id="4" value="#" /><label for="4">Jean</label>
            </li>
          </ul>
        </li>
        <li class="items-filtro">
          <span>Precio</span>
          <ul class="select-items ks-cboxtags">
            <li>
              <input type="checkbox" id="5" value="#" /><label for="5">Mayor precio</label>
            </li>
            <li>
              <input type="checkbox" id="6" value="#" /><label for="6">Menor precio</label>
            </li>
          </ul>
        </li>
        <li class="items-filtro">
          <span>Tallas</span>
          <ul class="select-items ks-cboxtags filtro-tallas">
            <li>
              <input type="checkbox" id="7" value="#" /><label for="7">S</label>
            </li>
            <li>
              <input type="checkbox" id="8" value="#" /><label for="8">L</label>
            </li>
            <li>
              <input type="checkbox" id="9" value="#" /><label for="9">M</label>
            </li>
            <li>
              <input type="checkbox" id="10" value="#" /><label for="10">XL</label>
            </li>
          </ul>
        </li>
        <li class="items-filtro">
          <span>Manga</span>
          <ul class="select-items ks-cboxtags">
            <li>
              <input type="checkbox" id="11" value="#" /><label for="11">Manga corta</label>
            </li>
            <li>
              <input type="checkbox" id="12" value="#" /><label for="12">Manga larga</label>
            </li>
          </ul>
        </li>
      </ul>
    </aside>

    <!-- Productos -->
    <section class="container-productos">
      <!-- Items de los productos -->
      <article class="cards">
        <a class="container-cards-img" href="detalles-producto.php">
          <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
          <img src="img/adidas1.png" class="img-back" alt="img-product" />
        </a>
        <h3>Camisa Adidas</h3>
        <p>$58.000</p>
        <div class="options-cards">
          <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
          <a href="#"><span>
              <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
        </div>
      </article>

      <article class="cards">
        <a class="container-cards-img" href="#">
          <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
          <img src="img/adidas1.png" class="img-back" alt="img-product" />
        </a>
        <h3>Camisa Adidas</h3>
        <p>$58.000</p>
        <div class="options-cards">
          <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
          <a href="#"><span>
              <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
        </div>
      </article>

      <article class="cards">
        <a class="container-cards-img" href="#">
          <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
          <img src="img/adidas1.png" class="img-back" alt="img-product" />
        </a>
        <h3>Camisa Adidas</h3>
        <p>$58.000</p>
        <div class="options-cards">
          <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
          <a href="#"><span>
              <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
        </div>
      </article>

      <article class="cards">
        <a class="container-cards-img" href="#">
          <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
          <img src="img/adidas1.png" class="img-back" alt="img-product" />
        </a>
        <h3>Camisa Adidas</h3>
        <p>$58.000</p>
        <div class="options-cards">
          <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
          <a href="#"><span>
              <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
        </div>
      </article>

      <article class="cards">
        <a class="container-cards-img" href="#">
          <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
          <img src="img/adidas1.png" class="img-back" alt="img-product" />
        </a>
        <h3>Camisa Adidas</h3>
        <p>$58.000</p>
        <div class="options-cards">
          <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
          <a href="#"><span>
              <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
        </div>
      </article>

      <article class="cards">
        <a class="container-cards-img" href="#">
          <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
          <img src="img/adidas1.png" class="img-back" alt="img-product" />
        </a>
        <h3>Camisa Adidas</h3>
        <p>$58.000</p>
        <div class="options-cards">
          <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
          <a href="#"><span>
              <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
        </div>
      </article>

      <article class="cards">
        <a class="container-cards-img" href="#">
          <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
          <img src="img/adidas1.png" class="img-back" alt="img-product" />
        </a>
        <h3>Camisa Adidas</h3>
        <p>$58.000</p>
        <div class="options-cards">
          <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
          <a href="#"><span>
              <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
        </div>
      </article>

      <article class="cards">
        <a class="container-cards-img" href="#">
          <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
          <img src="img/adidas1.png" class="img-back" alt="img-product" />
        </a>
        <h3>Camisa Adidas</h3>
        <p>$58.000</p>
        <div class="options-cards">
          <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
          <a href="#"><span>
              <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
        </div>
      </article>

      <article class="cards">
        <a class="container-cards-img" href="#">
          <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
          <img src="img/adidas1.png" class="img-back" alt="img-product" />
        </a>
        <h3>Camisa Adidas</h3>
        <p>$58.000</p>
        <div class="options-cards">
          <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
          <a href="#"><span>
              <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
        </div>
      </article>

    </section>

  </div>
  <!-- Barra de Navegación-->
  <div class="barra_navegacion">
    <nav aria-label="Page navigation example">
      <ul class="pagination">

        <a class="page-link" href="">
          <li class="page-item"><i class="fas fa-angle-left"></i> Anterior</li>
        </a>
        <a id="pags" class="page-link" href="">
          <li class="page-item">1</li>
        </a>
        <a class="page-link" href="">
          <li class="page-item">Siguiente <i class="fas fa-angle-right"></i></li>
        </a>

      </ul>
    </nav>
  </div>

  <!-- Footer -->
  <?php echo footer(); ?>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/menu-header.js"></script>
  <script src="js/form-login.js"></script>
  <script src="js/item-favorites.js"></script>
  <script src="js/show-filter.js"></script>
</body>

</html>