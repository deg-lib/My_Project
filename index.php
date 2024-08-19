<?php
include 'products.php';
$products = Product::getAllProducts();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <main class="main">
            <section class="motto">
                <img src="img/logo.jpeg " alt="Логотип">
                <h1>Доставка fedsneakers</h1>
                <p>Оперативно и недорого</p>
            </section>
            <div class="all-content">
                <section class="products">
                    <h2>Товары</h2>
                    <?php foreach ($products as $product): ?>
                       <div class="card">
                        <img src="<?= $product->image[0] ?>" alt="<?= $product->name ?>" width="200" height="200">
                        <a href="/product_template.php?id=<?= $product->id ?>"><h3 class="product-name"><?= $product->name ?></h3></a>
                        <p class="product-number"><?= $product->quantity ?> шт.</p>
                        <div class="row">
                            <div class="buttons">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                            <span><?= $product->price ?> </span>
                        </div>
                        
                        <button class="basket">Добавить в корзину</button>
                      </div>
                      <?php endforeach; ?>
                </section>
                <div class="basket-block">
                    <p class="offer">Ваш заказ</p>
                    <p class="basket-nothing">Корзина пуста</p>
                    <p class="delievery">Доставка: бесплатно</p>
                    <p class="total">Итого: <span> 1000тг</span></p>
                    <form>
                        <legend class="get-order">Оформить заказ</legend>
                        <input type="Phone" placeholder="  Ваш номер телефона" class="phone-number">
                    </form>
                    <button class="get">Заказать</button>
                </div>
            </div>
            
        </main>
        <footer></footer>
    </body>
</html>