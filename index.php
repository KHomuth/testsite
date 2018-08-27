<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Testsite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
    <?php
        require_once 'querys.php';
    ?>
    <header>
        <div class="nav">
            <a href="content.php">Home</a>
            <div class="dropdown">
                <a class="droptrigger">Produkte</a>
                <div class="dropcontent">
                    <ul>
                        <?php
                            foreach ($product as $row) {
                                echo '  <li>
                                            <a href="product.php?id='.$row['id'].'">
                                                '.$row['product_name'].'
                                            </a>
                                        </li>';
                           }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="main-content"></main>
    <footer>
        <a href="impressum.php">Impressum</a>
        <a href="agb.php">AGB</a>
        <a href="datenschutz.php">Datenschutz</a>
    </footer>
</body>
</html>
<script>
    $(document).ready(function(){
        $('.main-content').load('content.php');

        $('.nav a').click(function(e) {
            e.preventDefault();
            $('.main-content').load(e.target.href);
        })
    });
</script>