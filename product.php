<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <?php
        require_once 'querys.php';

        $id = $_GET['id'];


        get_product_details($conn, $id);

        //print_r($p_detail);
    ?>
</body>
</html>