<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <?php
        require_once 'querys.php';

        //Slideshow mit Hilfe von https://www.mediaevent.de/javascript/simple-lightbox.html
        echo'<div class="simpleSlides">';
            foreach($image as $row){
                echo '<img class="slides animate-right" src='.$row['path'].'>';
            }
        echo'</div>
        
        <div class="product-preview">';
            foreach ($product as $row) {
                 echo ' <p>
                            '.$row['product_name'].'<br>'.$row['description'].'
                        </p>';
            }
        echo'</div>
        
        <iframe width="560" height="315" src="https://www.youtube.com/embed/9WGKcLyllp0" frameborder="0" allowfullscreen></iframe>
        ';
    ?>
</body>
</html>
<script>
    var simpleSlides = function () {
        var i;
        var slides = document.querySelectorAll(".slides");
        for (i = 0; i < slides.length; i++) {
            slides[i].setAttribute("style","display:none");
        }
        count++;
        if (count > slides.length) { count = 1; }
        slides[count-1].setAttribute("style","display:block");
        setTimeout(simpleSlides, 5000);
    }

    var count = 0;
    simpleSlides();
</script>