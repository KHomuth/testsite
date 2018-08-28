<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css?v=1" />
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
            <section class="article">
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
                </table>
            </section>
        ';

        if (isset($p_detail[0]['rating'])) {
            echo '
                <section class="review">
                    <ul>
                        <li class="rname">'.$p_detail[0]['review_name'].'</li>
                        <li class="rating">'.$p_detail[0]['rating'].' / 10</li>
                        <div class="clear"></div>
                        <li class="review_text">'.$p_detail[0]['review'].'</li>
                    </ul> 
                </section>';
        } else {
            echo '
                <section class="review">Artikel noch nicht bewertet.</section>';
        }
        

    ?>
</body>
</html>