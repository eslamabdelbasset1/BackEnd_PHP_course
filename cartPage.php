<?php
    session_start();
    if (!empty($_SESSION['cart']))
    {
        $product = $_SESSION['cart'];
    }else{
        $product = "No product added";
    }
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
    <title>Cart Page</title>
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="productPage.php">Products</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="productPage.php">Home <span class="sr-only">(current)</span></a>
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
            <h1 class="text-capitalize text-center my-3"></h1>
            <ol class="p-5 my-5">
                <?php foreach($product as $pName) {?>
                    <li class="h1 text-white"><?= $pName ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</section>
</body>
</html>
