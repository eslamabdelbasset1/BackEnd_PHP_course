<?php
    $productCard = array(
            array('name' => 'item 1', 'price' => 1200 ,'images' => 'cart_1.jpeg'),
            array('name' => 'item 2', 'price' => 6200 ,'images' => 'cart_2.jpg'),
            array('name' => 'item 3', 'price' => 4500 ,'images' => 'cart_3.jpg'),
            array('name' => 'item 4', 'price' => 2000 ,'images' => 'cart_4.jpg'),
            array('name' => 'item 5', 'price' => 1300 ,'images' => 'cart_5.jpg'),
            array('name' => 'item 6', 'price' => 500 ,'images' => 'cart_6.jpg')
    )
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Project Page</title>
    </head>
    <body>
        <header>
           <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light">
                   <a class="navbar-brand" href="#">Products</a>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>

                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <ul class="navbar-nav ml-auto">
                           <li class="nav-item active">
                               <a class="nav-link" href="productPage.php">Home <span class="sr-only">(current)</span></a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="cartPage.php"><i class="fas fa-cart-plus"></i> Cart</a>
                           </li>
                       </ul>
                   </div>
               </nav>
           </div>
        </header>


        <section>
            <div class="container py-5">
                <div class="row">
                    <?php foreach ($productCard as $value)  {?>
                    <div class="col-md-4 card-group py-2">
                        <div class="card">
                            <img src="images/<?= $value['images'] ?>" class="card-img-top img-fluid" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $value['name'] ?></h5>
                                <p class="card-text">Price: <?= $value['price'] ?></p>
                                <a href="addCart.php?pName=<?=$value['name'] ?>" class="btn btn-primary">Add to card</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </body>
</html>
