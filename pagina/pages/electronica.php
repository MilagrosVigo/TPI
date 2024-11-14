<?php
require '../php/db.php';

// Si no se ha pasado una categoría en la URL, establece 'Electrónica' como valor predeterminado
$category = isset($_GET['category']) ? $_GET['category'] : 'Electrónica';

if ($conn) {
    // Filtra los productos de la categoría seleccionada
    $sql = "SELECT p.* 
            FROM productos p
            JOIN producto_categoria pc ON p.id = pc.producto_id
            JOIN categorias c ON pc.categoria_id = c.id
            WHERE c.nombre = :category";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':category', $category);

    $stmt->execute();

    if ($stmt) {
        $productos = $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtiene los resultados
    } else {
        echo "Error en la consulta SQL.";
    }
} else {
    echo "Error de conexión a la base de datos.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLIMPORTADO</title>
    <link rel="StyleSheet" href="../css/estilos.css" type="text/css">
</head>
<body>
    
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="container-logo">
                    <a href="../index.php"><img src="../img/logo.png" alt="Logo"></a>
                </div>  
                
                <div class="container-user">
                    <a href="../php/login_register.php">
                        <i class="fa-solid fa-user"></i>
                    </a>

                    <i class="fa-solid fa-cart-shopping" id="cartIcon" style="cursor: pointer;"></i>
                    <div class="content-shopping">
                        <span class="text">Carrito </span>
                        <span class="number" id="cartCount">(0)</span>
                    </div>
                </div>
                
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
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="electronica.php">Electrónica</a></li>
                    <li><a href="./perfume.php">Perfumes</a></li>
                    <li><a href="bebida.html">Electrodoméstico</a></li>
                    <li><a href="?category=Todo">Todo</a></li> 
                </ul>

                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Buscar..." autocomplete="off" />
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </nav>
        </div>
    </header>
    
    <main class="main-content">
        <section class="secciones-titulos">
            <h1>ELECTRÓNICA</h1>
        </section>
        <div class="container-options">
            <a href="?category=Electrónica" class="category_item">Todo</a>
            <a href="?category=Relojes" class="category_item">Relojes</a>
            <a href="?category=Celulares" class="category_item">Celulares</a>
            <a href="?category=Notebooks" class="category_item">Notebooks</a>
            <a href="?category=Auriculares" class="category_item">Auriculares</a>
        </div>
   
        <h2 id="searchResultsTitle" style="display:none;">Resultados</h2>
        
        <div class="container-products">
            <?php if (!empty($productos)): ?>
                <?php foreach ($productos as $producto): ?>
                    <div class="card-product">
                        <div class="container-img">
                            <img src="../<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                            <?php if ($producto['descuento'] > 0): ?>
                                <span class="discount">-<?php echo $producto['descuento']; ?>%</span>
                            <?php endif; ?>
                            <div class="buttom-group">
                                <span><i class="fa-regular fa-eye"></i></span>
                                <span><i class="fa-regular fa-heart"></i></span>
                                <span><i class="fa-solid fa-code-compare"></i></span>
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
                            <h3><?php echo $producto['nombre']; ?></h3>
                            <span class="add-cart"><i class="fa-solid fa-cart-shopping"></i></span>
                            <p class="price">$<?php echo $producto['precio']; ?><span><?php echo $producto['descuento'] > 0 ? '$' . ($producto['precio'] * (1 - $producto['descuento'] / 100)) : ''; ?></span></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay productos disponibles en esta categoría.</p>
            <?php endif; ?>
        </div>

    </main>

    <script src="https://kit.fontawesome.com/ab21685d70.js" crossorigin="anonymous"></script>

    <footer class="footer">
        <div class="container container-footer">
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer">Información de Contacto</p>
                    <ul>
                        <li>Teléfono: 123-456-789</li>
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
                    <p class="title-footer">Información</p>
                    <ul>
                        <li><a href="#">Acerca de Nosotros</a></li>
                        <li><a href="#">Políticas de Privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Contáctanos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Mi página web &copy; 2024</p>
        </div>
    </footer>
    <script src="../js/index.js"></script>
</body>
</html>
