<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php
        require_once 'db.php';
        $id = $_GET['id'];

        $p_details = $conn->query("SELECT * FROM product WHERE id='".$id."'");
        $p_detail = $p_details->fetchAll();

        $p_img = $conn->query("SELECT path FROM images WHERE id='".$id."'");
        $img = $p_img->fetchAll();

        echo'
            <table>
                <tr>
                    <td with="auto">
                        <img width="75%" src='.$img[0]['path'].'>
                    </td>
                    <td width="30%">
                        <ul>
                            <li><h2>'.$p_detail[0]['product_name'].'</h2></li>
                            <li>'.$p_detail[0]['description'].'</li>
                            <li>'.$p_detail[0]['price'].' € <button>Kaufen!</button></li>
                        </ul>
                    </td>
                </tr>
                <tr></tr>
            </table>
        ';
        //print_r($p_detail);

        //print_r($p_detail[0]['id']);
        if (isset($p_detail[0]['review'])) {
            echo 'Review gesetzt';
        } else {
            echo 'Artikel noch nicht bewertet';
        }
        

    ?>
</body>
</html>