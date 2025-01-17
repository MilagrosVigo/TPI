<?php
require 'php/db.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLIMPORTADO</title>

    <link rel="StyleSheet" href="./css/estilos.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body >
    
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="container-logo">
                    <a href="./index.php"><img src="./img/logo.png" alt="Logo"></a>
                </div>    
                
                <div class="container-user">
                        <a href="../pagina/php/login_register.php">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <i class="fa-solid fa-cart-shopping" id="cartIcon" style="cursor: pointer;"></i>
                    <div class="content-shopping">
                        <span class="text">Carrito </span>
                        <span class="number" id="cartCount">(0)</span>
                    </div>
                </div>
                
                <!-- Nueva sección del carrito (oculta por defecto) -->
                <div class="cart-modal">
                    <div class="cart-header">
                        <h2 class="cart-title">Carrito</h2>
                        <span class="close-cart">X</span>
                    </div>
                    <div class="cart-list"></div>
                    <div class="cart-footer">
                        <p class="total">Total: $0</p>
                        <button class="pay-button">Pagar</button>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="pages/electronica.php">Electrónica</a></li>
                    <li><a href="pages/perfume.php">Perfumes</a></li>
                    <li><a href="pages/bebida.html">Electrodoméstico</a></li>
                    <li><a href="#">Todo</a></li>
                </ul>

                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Buscar..." autocomplete="off" />
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                

            </nav>
        </div>

    </header>
    
    <section class="banner">
        <div class="content-banner">
            <p>Encontrá todo lo que estabas buscando</p>
            <h2>¡Descubre la última tecnología! <br>Innovación a tu alcance</h2>
            <a href="./pages/lanzamientos.html">Últimos lanzamientos</a>
        </div>
    </section>

    <!-- Contenido de página -->
    <main class="main-content">
        <section class="container top-categories">
            <h1 class="heading-1">MEJORES CATEGORIAS</h1>

            <div class="container-categories">
               <div class="card-category category-apple">
                    <p>Apple</p>
                    <a href="./pages/apple.html">Ver más</a>
               </div> 
                <div class="card-category category-gaming">
                     <p>Gaming</p>
                     <a href="./pages/gaming.html">Ver más</a>
                </div> 
                <div class="card-category category-xiaomi">
                     <p>Xiaomi</p>
                     <a href="./pages/xiaomi.html">Ver más</a>
                </div> 
            </div>
        </section>
        
        <section class="container top-products">
            <h1 class="heading-1">MEJORES PRODUCTOS</h1>

            <div class="container-options">
                <a href="#" class="category_item" category="destacado">Destacados</a>
                <a href="#" class="category_item" category="reciente">Más recientes</a>
                <a href="#" class="category_item" category="masVendido">Más Vendidos</a>
            </div>
        </section>
        <h2 id="searchResultsTitle" style="display:none;">RESULTADOS</h2>
            <!--LISTA DE PRODUCTOS-->
            <div class="container-products">
                <!-- producto 1 -->
                <div class="card-product" categoryProduct="destacado">
                   <div class="container-img">
                        <img src="./img/airpods.png" alt="Airpods Pro"/>
                        <span class="discount">-15%</span>
                        <div class="buttom-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                   </div> 
                   <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Airpods Pro</h3>
                        <span class="add-cart" data-product-name="Airpods Pro" data-product-price="270">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$270<span>$318</span></p>
                   </div>
                </div>

                <!--PRODUCTO 2 -->
                <div class="card-product" categoryProduct="destacado">
                    <div class="container-img">
                         <img src="./img/xiaomi1.png" alt="Aspiradora xiaomi">
                         <span class="discount">-10%</span>
                         <div class="buttom-group">
                             <span>
                                 <i class="fa-regular fa-eye"></i>
                             </span>
                             <span>
                                 <i class="fa-regular fa-heart"></i>
                             </span>
                             <span>
                                <i class="fa-solid fa-code-compare"></i>
                             </span>
                         </div>
                    </div> 
                    <div class="content-card-product">
                         <div class="stars">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                         </div>
                         <h3>Aspiradora Xiaomi</h3>
                         <span class="add-cart" data-product-name="Aspiradora Xiaomi" data-product-price="250">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$250<span>$275</span></p>
                    </div>
                 </div>
                 <!--PRODUCTO 3-->
                 <div class="card-product" categoryProduct="destacado">
                    <div class="container-img">
                         <img src="./img/reloj.png" alt="Reloj">
                         <div class="buttom-group">
                             <span>
                                 <i class="fa-regular fa-eye"></i>
                             </span>
                             <span>
                                 <i class="fa-regular fa-heart"></i>
                             </span>
                             <span>
                                <i class="fa-solid fa-code-compare"></i>
                             </span>
                         </div>
                    </div> 
                    <div class="content-card-product">
                         <div class="stars">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-regular fa-star"></i>
                         </div>
                         <h3>Apple Watch</h3>
                         <span class="add-cart" data-product-name="Apple Watch" data-product-price="600">
                            <i class="fa-solid fa-cart-shopping"></i>
                         </span>
                         <p class="price">$600</p>
                    </div>
                </div>
                <!--PRODUCTO 4-->
                <div class="card-product" categoryProduct="destacado">
                    <div class="container-img">
                         <img src="./img/realidadv.png" alt="LentesRV">
                         <div class="buttom-group">
                             <span>
                                 <i class="fa-regular fa-eye"></i>
                             </span>
                             <span>
                                 <i class="fa-regular fa-heart"></i>
                             </span>
                             <span>
                                <i class="fa-solid fa-code-compare"></i>
                             </span>
                         </div>
                    </div> 
                    <div class="content-card-product">
                         <div class="stars">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                         </div>
                         <h3>Vision Pro</h3>
                         <span class="add-cart" data-product-name="Vision Pro" data-product-price="4.700">
                            <i class="fa-solid fa-cart-shopping"></i>
                         </span>
                         <p class="price">$4.700</p>
                    </div>
                </div>
                <!--PRODUCTO 5-->
                <div class="card-product" categoryProduct="masVendido">
                    <div class="container-img">
                         <img src="./img/airpods.png" alt="Airpods Pro"/>
                         <span class="discount">-15%</span>
                         <div class="buttom-group">
                             <span>
                                 <i class="fa-regular fa-eye"></i>
                             </span>
                             <span>
                                 <i class="fa-regular fa-heart"></i>
                             </span>
                             <span>
                                 <i class="fa-solid fa-code-compare"></i>
                             </span>
                         </div>
                    </div> 
                    <div class="content-card-product">
                         <div class="stars">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-regular fa-star"></i>
                         </div>
                         <h3>Airpods Pro</h3>
                         <span class="add-cart" data-product-name="Airpods Pro" data-product-price="270">
                            <i class="fa-solid fa-cart-shopping"></i>
                         </span>
                         <p class="price">$270<span>$318</span></p>
                    </div>
                </div>
                <!--PRODUCTO 6-->
                <div class="card-product" categoryProduct="masVendido">
                    <div class="container-img">
                         <img src="./img/airpods.png" alt="Airpods Pro"/>
                         <span class="discount">-15%</span>
                         <div class="buttom-group">
                             <span>
                                 <i class="fa-regular fa-eye"></i>
                             </span>
                             <span>
                                 <i class="fa-regular fa-heart"></i>
                             </span>
                             <span>
                                 <i class="fa-solid fa-code-compare"></i>
                             </span>
                         </div>
                    </div> 
                    <div class="content-card-product">
                         <div class="stars">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-regular fa-star"></i>
                         </div>
                         <h3>Airpods Pro</h3>
                         <span class="add-cart" data-product-name="Airpods Pro" data-product-price="270">
                            <i class="fa-solid fa-cart-shopping"></i>
                         </span>
                         <p class="price">$270<span>$318</span></p>
                    </div>
                </div>
                <!--PRODUCTO 7-->
                <div class="card-product" categoryProduct="masVendido">
                    <div class="container-img">
                         <img src="./img/airpods.png" alt="Airpods Pro"/>
                         <span class="discount">-15%</span>
                         <div class="buttom-group">
                             <span>
                                 <i class="fa-regular fa-eye"></i>
                             </span>
                             <span>
                                 <i class="fa-regular fa-heart"></i>
                             </span>
                             <span>
                                 <i class="fa-solid fa-code-compare"></i>
                             </span>
                         </div>
                    </div> 
                    <div class="content-card-product">
                         <div class="stars">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-regular fa-star"></i>
                         </div>
                         <h3>Airpods Pro</h3>
                         <span class="add-cart" data-product-name="Airpods Pro" data-product-price="270">
                            <i class="fa-solid fa-cart-shopping"></i>
                         </span>
                         <p class="price">$270<span>$318</span></p>
                    </div>
                </div>
                <!--PRODUCTO 8-->
                <div class="card-product" categoryProduct="masVendido">
                    <div class="container-img">
                         <img src="./img/airpods.png" alt="Airpods Pro"/>
                         <span class="discount">-15%</span>
                         <div class="buttom-group">
                             <span>
                                 <i class="fa-regular fa-eye"></i>
                             </span>
                             <span>
                                 <i class="fa-regular fa-heart"></i>
                             </span>
                             <span>
                                 <i class="fa-solid fa-code-compare"></i>
                             </span>
                         </div>
                    </div> 
                    <div class="content-card-product">
                         <div class="stars">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-regular fa-star"></i>
                         </div>
                         <h3>Airpods Pro</h3>
                         <span class="add-cart" data-product-name="Airpods Pro" data-product-price="270"></span>
                            <i class="fa-solid fa-cart-shopping"></i>
                         </span>
                         <p class="price">$270<span>$318</span></p>
                    </div>
                </div>
                <!--PRODUCTO 10-->
                <div class="card-product" categoryProduct="reciente">
                    <div class="container-img">
                         <img src="./img/reloj.png" alt="Reloj">
                         <div class="buttom-group">
                             <span>
                                 <i class="fa-regular fa-eye"></i>
                             </span>
                             <span>
                                 <i class="fa-regular fa-heart"></i>
                             </span>
                             <span>
                                <i class="fa-solid fa-code-compare"></i>
                             </span>
                         </div>
                    </div> 
                    <div class="content-card-product">
                         <div class="stars">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-regular fa-star"></i>
                         </div>
                         <h3>Apple Watch</h3>
                         <span class="add-cart">
                             <i class="fa-solid fa-cart-shopping"></i>
                         </span>
                         <p class="price">$600</p>
                    </div>
                </div>

                <!--PRODUCTO 11-->
                <div class="card-product" categoryProduct="reciente">
                    <div class="container-img">
                         <img src="./img/reloj.png" alt="Reloj">
                         <div class="buttom-group">
                             <span>
                                 <i class="fa-regular fa-eye"></i>
                             </span>
                             <span>
                                 <i class="fa-regular fa-heart"></i>
                             </span>
                             <span>
                                <i class="fa-solid fa-code-compare"></i>
                             </span>
                         </div>
                    </div> 

                    <div class="content-card-product">
                         <div class="stars">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-regular fa-star"></i>
                         </div>
                         <h3>Apple Watch</h3>
                         <span class="add-cart">
                             <i class="fa-solid fa-cart-shopping"></i>
                         </span>
                         <p class="price">$600</p>
                    </div>
                </div>
                
                <!--PRODUCTO 12-->
                <div class="card-product" categoryProduct="reciente">
                    <div class="container-img">
                         <img src="./img/reloj.png" alt="Reloj">
                         <div class="buttom-group">
                             <span>
                                 <i class="fa-regular fa-eye"></i>
                             </span>
                             <span>
                                 <i class="fa-regular fa-heart"></i>
                             </span>
                             <span>
                                <i class="fa-solid fa-code-compare"></i>
                             </span>
                         </div>
                    </div> 
                    <div class="content-card-product">
                         <div class="stars">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-regular fa-star"></i>
                         </div>
                         <h3>Apple Watch</h3>
                         <span class="add-cart">
                             <i class="fa-solid fa-cart-shopping"></i>
                         </span>
                         <p class="price">$600</p>
                    </div>
                </div>
                <!---->
                
            </div>
            <p id="noResults" class="no-results">No se han encontrado resultados.</p>
            

    </main>


    <!-- -->
    <script 
        src="https://kit.fontawesome.com/ab21685d70.js" 
        crossorigin="anonymous">
    </script>

   
    <!-- Pie de página -->
    <footer class="footer">
        <div class="container container-footer">
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer"> Información de Contacto</p>
                    <ul>
                        <li>Telefono: 123-456-789</li>
                        <li>Email: Allimportados@gmail.com</li>
                    </ul>
                        <div class="social-icons">
                            <span class="facebook"><i class="fa-brands fa-facebook-f"></i></span>
                            <span class="instagram"><i class="fa-brands fa-instagram"></i></span>
                            <span class="whatsapp"><i class="fa-brands fa-whatsapp"></i></span>
                            <span class="youtube"><i class="fa-brands fa-youtube"></i></span>
                        </div>
                </div>
                <div class="information">
                    <p class="title-footer"> Información </p>
                    <ul>
                        <li><a href="#">Acerca de Nosotros</a></li>
                        <li><a href="#">Politicas de Privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Contactános</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="copyright">
            <p>
                Mi pagina web &copy; 2024
            </p>
        </div>
    </footer>
    <script src="./js/index.js"></script>

    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <script>
        // Array para almacenar los productos del carrito
        let cart = [];
        
        // Función para agregar productos al carrito
        function addToCart(productName, productPrice) {
            // Agrega el producto al carrito
            cart.push({ name: productName, price: productPrice });
            updateCart();
        }
    
        // Función para actualizar la visualización del carrito
        function updateCart() {
            const cartItemsContainer = document.getElementById("cartItems");
            const totalPriceContainer = document.getElementById("totalPrice");
            cartItemsContainer.innerHTML = ""; // Limpia el contenido anterior
            let totalPrice = 0;
    
            // Muestra cada producto en el carrito
            cart.forEach(item => {
                const itemElement = document.createElement("div");
                itemElement.textContent = `${item.name} - $${item.price}`;
                cartItemsContainer.appendChild(itemElement);
                totalPrice += item.price;
            });
    
            totalPriceContainer.textContent = `Total: $${totalPrice}`;
        }
    
        // Ejemplo de cómo agregar productos al hacer clic
        document.querySelectorAll('.add-cart').forEach((button, index) => {
            button.addEventListener('click', () => {
                const productCard = button.closest('.card-product');
                const productName = productCard.querySelector('h3').textContent;
                const productPrice = parseFloat(productCard.querySelector('.price').textContent.replace('$', '').split('<span>')[0].trim());
                addToCart(productName, productPrice);
            });
        });
    </script>
    
</body>
</html>
