<?php
        require_once 'db.php';

        $images = $conn->query("SELECT * FROM images");
        $image = $images->fetchAll();
        
        $products = $conn->query("SELECT * FROM product");
        $product = $products->fetchAll();

        function get_product_details($p_id){
            $p_details = $conn->query("SELECT * FROM product WHERE id='".$p_id."'");
            //$p_detail = $products->fetchAll();

            //return $p_detail;
        }
?>