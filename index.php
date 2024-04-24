<?php include("db.php")?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delicious Bread</title>
    <link rel="icon" href="imagenes/1.png">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <div class="menu container">
        <img class="logo-1" src="imagenes/1.png" alt="" />
        <input type="checkbox" id="menu" />
        <label for="menu">
          <img class="menu-icono" src="imagenes/1.png" alt="" />
        </label>

        <nav class="navbar">
          <div class="menu1">
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="modulos/registro-usuario/inicio_usuario.php">Sesion</a></li>
              <li><a href="modulos/producto/productos.php">Productos</a></li>
            </ul>
          </div>

          <img class="logo-2" src="imagenes/1.png" alt="" />
          <div class="menu-2">
            <ul>
              <li><a href="#">Horario</a></li>
            </ul>
            <div class="socials">
              <a href="https://www.facebook.com/profile.php?id=61558043460855">
                <div class="social">
                  <img src="imagenes/s1.svg" alt="" />
                </div>
              </a>
            </div>
            <a href="https://twitter.com/CXosa22624">
              <div class="social">
                <img src="imagenes/s2.svg" alt="" />
              </div>
            </a>
            <a href="https://www.instagram.com/dbcoffee_oficial/">
              <div class="social">
                <img src="imagenes/s3.svg" alt="" />
              </div>
            </a>
          </div>
        </nav>
      </div>

      <div class="header-content container">
        <div class="swiper mySwiper-1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slider">
                <div class="slider-txt">
                  <h1>Pan tostado</h1>
                  <p>
                    Delicioso pan tostado, de alta calidad y en su preferida receta
                    tradicional
                  </p>
                  <div class="botones">
                    <a href="cotizacion/cotizacion.php" class="btn-1">Cotiza</a>
                    <a href="#" class="btn-1">Menu</a>
                  </div>
                </div>
                <div class="slider-img">
                  <img src="imagenes/Pan tostado.png" alt="" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider">
                <div class="slider-txt">
                  <h1>Menú</h1>
                  <p>
                    Menú diseñado estrategicamente para ti!
                  </p>
                  <div class="botones">
                    <a href="#" class="btn-1">Comprar</a>
                    <a href="#" class="btn-1">Menu</a>
                  </div>
                </div>
                <div class="slider-img">
                  <img src="imagenes/Menú Desayuno Comida Restaurante Rústico Pizarra.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider">
                <div class="slider-txt">
                  <h1>Sandwich</h1>
                  <p>
                    Deliciosos sandwiches, hechos a tu gusto y preferencia!
                  </p>
                  <div class="botones">
                    <a href="#" class="btn-1">Comprar</a>
                    <a href="#" class="btn-1">Menu</a>
                  </div>
                </div>
                <div class="slider-img">
                  <img src="imagenes/Sandwich2.png" alt="" />
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </header>

    <main class="products">
      <div class="tabs container">
        <input
          type="radio"
          name="tabs"
          id="tab1"
          checked="checked"
          class="tabInput"
          value="1"
        />
        <label for="tab1">Panaderia</label>
        <div class="tab">
          <div class="swiper mySwiper-2" id="swiper1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product">
                  <div class="product-img">
                    <h4>Nuevo</h4>
                    <img src="imagenes/Croissant.png" alt="" />
                  </div>
                  <div class="prodcut-txt">
                    <h4>Producto</h4>
                    <p>Calidad Premium</p>
                    <span class="price">$8.00</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="product-img">
                    <h4>Nuevo</h4>
                    <img src="imagenes/Gallletas.png" alt="" />
                  </div>
                  <div class="prodcut-txt">
                    <h4>Producto</h4>
                    <p>Calidad Premium</p>
                    <span class="price">$8.00</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="product-img">
                    <h4>Nuevo</h4>
                    <img src="imagenes/Pan.png" alt="" />
                  </div>
                  <div class="prodcut-txt">
                    <h4>Producto</h4>
                    <p>Calidad Premium</p>
                    <span class="price">$8.50</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>

        <input
          type="radio"
          name="tabs"
          id="tab2"
          checked="checked"
          class="tabInput"
          value="2"
        />
        <label for="tab2">Bebidas</label>
        <div class="tab">
          <div class="swiper mySwiper-2" id="swiper2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product">
                  <div class="product-img">
                    <h4>Nuevo</h4>
                    <img src="imagenes/Malteadas 2.png" alt="" />
                  </div>
                  <div class="prodcut-txt">
                    <h4>Producto</h4>
                    <p>Calidad Premium</p>
                    <span class="prcie">$4.00</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="product-img">
                    <h4>Nuevo</h4>
                    <img src="imagenes/Jugos naturales.png" alt="" />
                  </div>
                  <div class="prodcut-txt">
                    <h4>Producto</h4>
                    <p>Calidad Premium</p>
                    <span class="price">$8.00</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="product-img">
                    <h4>Nuevo</h4>
                    <img src="imagenes/Capuccino.png" alt="" />
                  </div>
                  <div class="prodcut-txt">
                    <h4>Producto</h4>
                    <p>Calidad Premium</p>
                    <span class="price">$10.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>

        <input
          type="radio"
          name="tabs"
          id="tab3"
          checked="checked"
          class="tabInput"
          value="3"
        />
        <label for="tab3">Variedad</label>
        <div class="tab">
          <div class="swiper mySwiper-2" id="swiper3">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product">
                  <div class="product-img">
                    <h4>Nuevo</h4>
                    <img src="imagenes/Sandwich.png" alt="" />
                  </div>
                  <div class="prodcut-txt">
                    <h4>Sándwich Clásico</h4>
                    <p>Calidad Premium</p>
                    <span class="prcie">$80.00</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="product-img">
                    <h4>Nuevo</h4>
                    <img src="imagenes/Postre.png" alt="" />
                  </div>
                  <div class="prodcut-txt">
                    <h4>Postre Frutos Rojos</h4>
                    <p>Calidad Premium</p>
                    <span class="prcie">$80.00</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="product-img">
                    <h4>Nuevo</h4>
                    <img src="imagenes/Postres.png" alt="" />
                  </div>
                  <div class="prodcut-txt">
                    <h4>Postres</h4>
                    <p>Calidad Premium</p>
                    <span class="prcie">$80.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </main>

    <section class="info container">
      <div class="info-img">
        <img src="imagenes/informacion.png" alt="" />
      </div>

      <div class="info-txt">
        <h2>Informacion</h2>
        <p>
          Esta es una cafetería al estilo tradicional, con un pequeño toque de modernidad sin perder su verdadera esencia. 
          Hola! Soy Marcela del Carmen Sandoval, soy dueña de esta cafetería tan espectacular.
          Que durante años ha crecido progresivamente
          obteniendo estatus con esfuerzo, atencio y calidad excepcional. Esta cafeteria 
          dio su apertura en 1990 gracias a mi gran amor por el cafe y ambiente tranquilo
          de cafeteria. Espero poder conocerte y brindarte mi mejor atención! Te espero.
        </p>
        <a href="#" class="btn-2">Mas informacion</a>
      </div>
    </section>

    <section class="horario">
      <div class="horario-info container">
        <h2>Horario</h2>
        <div class="horario-txt">
          <div class="txt">
            <h4>Direccion</h4>
            <p>Cra. 2a #18a-38, Bogotá</p>
          </div>
          <div class="txt">
            <h4>Horario</h4>
            <p>Lunes a Viernes : 7 am - 6 pm.</p>
            <p>Sabado y Domingo : 7 am - 6 pm.</p>
          </div>
          <div class="txt">
            <h4>Telefono</h4>
            <p>312 544 7878</p>
            <p>315 643 2712</p>
          </div>
          <div class="txt"> 
            <h4>Redes Sociales</h4>
            <div class="socials">
              <a href="https://www.facebook.com/profile.php?id=61558043460855">
                <div class="social">
                  <img src="imagenes/s1.svg" alt="" />
                </div>
              </a>
            <a href="https://twitter.com/CXosa22624">
              <div class="social">
                <img src="imagenes/s2.svg" alt="" />
              </div>
            </a>
            <a href="https://www.instagram.com/dbcoffee_oficial/">
              <div class="social">
                <img src="imagenes/s3.svg" alt="" />
              </div>
            </a>
          </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15907.820804079944!2d-74.07908444898499!3d4.602046137012818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99348a46445f%3A0xd6dba4e99da5d019!2zQm9nb3TDoSBTdG9yZSBDYWbDqQ!5e0!3m2!1ses-419!2sco!4v1712207598040!5m2!1ses-419!2sco" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer class="footer container">

      <img class="logo-2" src="imagenes/logo.svg" alt="">
      <div class="links">
        <h4>Cafeteria</h4>
        <ul>
          <li><a href="#">Solicita tu servicio a domicilio</a></li>
          <li><a href="#">Servicio sin costo alguno</a></li>
        </ul>
      </div>
      <div class="links">
        <h4>Desarrollador</h4>
        <ul>
          <li><a href="#">Sebastain Rojas</a></li>
          <li><a href="#">Lorem</a></li>
          <li><a href="#">Lorem</a></li>
          <li><a href="#">Lorem</a></li>
        </ul>
      </div>
      <div class="links">
        <h4>Analista y Aprobador</h4>
        <ul>
          <li><a href="#">Lorem</a></li>
          <li><a href="#">Lorem</a></li>
          <li><a href="#">Lorem</a></li>
          <li><a href="#">Lorem</a></li>
        </ul>
      </div>
      <div class="links">
        <h4>Redes Sociales</h4>
        <div class="socials">
          <a href="https://www.facebook.com/profile.php?id=61558043460855">
            <div class="social">
              <img src="imagenes/s1.svg" alt="" />
            </div>
          </a>
        <a href="https://twitter.com/CXosa22624">
          <div class="social">
            <img src="imagenes/s2.svg" alt="" />
          </div>
        </a>
        <a href="https://www.instagram.com/dbcoffee_oficial/">
          <div class="social">
            <img src="imagenes/s3.svg" alt="" />
          </div>
        </a>
      </div>
      </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
  </body>
</html>
