<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <?php
        require_once 'db.php';
        $id = $_GET['id'];

        $p_details = $conn->query("SELECT * FROM product WHERE id='".$id."'");
        $p_detail = $p_details->fetchAll();

        print_r($p_detail);

    ?>
</body>
</html>