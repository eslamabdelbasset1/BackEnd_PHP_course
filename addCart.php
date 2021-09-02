<?php
    session_start();
    if (isset($_GET['pName']))
    {
        $productCart [] = $_GET['pName'];
        $_SESSION['cart'] = $productCart;
        header("Location:cartPage.php");
    }else{
        header("Location:productPage.php");
    }
    ?>
