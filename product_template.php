<?php
include 'products.php';
$productId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = Product::getProductById($productId);

if(!$product) {
header('Location: /index.php');
exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/styles/style.css">
        <link rel="stylesheet" href="/styles/product.css">
    </head>
    <body class="container">
        <header>
            <a href="/index.html">Главная</a>
            <span> > { название товара } </span>
        </header>
        <main>
            <h1><?=$product->name?></h1>
            <section class="photos">
                <img src="<?=$product->image[0]?>" alt="Картинка товара" width="200" height="200">
                <img src="<?=$product->image[1]?>" alt="Картинка товара" width="200" height="200">
                <img src="<?=$product->image[2]?>" alt="Картинка товара" width="200" height="200">
            </section>
            <div>
                <p><?=$product->description?> </p>
            </div>
            <div class="div-block">
                <p class="cost1"><?=$product->price?></p>
                <p class="quantity"><?=$product->quantity?></p>
                <div class="button2">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                </div>
                <button class="basket5">Добавить в корзину</button>
            </div>
            </div>
        </main>
    </body>
</html>