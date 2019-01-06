<html>
    <head>
        <title>My Shop</title>
    </head>
    <body>
        <h1>Welcome to my shop</h1>
        <ol>
            <?php
                $json = file_get_contents('http://ip172-18-0-15-bgp5l9ov0j3g00aaah6g-5001.direct.labs.play-with-docker.com');
                $obj = json_decode($json);
                
                $products = $obj->products;
                foreach($products as $product){
                    echo "<li>$product</li>";
                }
            ?>
        </ol>
    </body>
</ht