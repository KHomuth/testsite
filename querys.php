<?php
        require_once 'db.php';

        $images = $conn->query("SELECT * FROM images");
        $image = $images->fetchAll();
        
        $products = $conn->query("SELECT * FROM product");
        $product = $products->fetchAll();

?>