<?php 
    require_once __DIR__. "/classes/camera.php";
    require_once __DIR__. "/classes/computer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>prodotti</title>
</head>
<body>
    <header #id="header_container">
    <h1>products</h1>
    <nav></nav>
        
    </header>
    <main>

        <?php 
            $CameraReflex = new Camera("nikon", "d7000", 700.00);    
            
            $ComputerApple = new Computer("apple", "MacBookAir", 1600.00);
        ?>
        <div>
            <h2>Camera</h2>
            <img src="" alt="">
            <p> <?php echo $CameraReflex->InfoProduct(); ?></p>
            <h4>price: <?php echo $CameraReflex->Price(); ?> €</h4>
        </div>
        
        <div>
            <h2>Computer</h2>
            <img src="" alt="">
            <p> <?php echo $ComputerApple->InfoProduct(); ?></p>
            <h4>price: <?php echo $ComputerApple->Price(); ?> €</h4>
        </div>
    </main>
</body>
</html>
