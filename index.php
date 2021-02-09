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
    <header id="header_container">
    <div>
        <h1>products</h1>
     </div>
    <div>
        <nav>
            <ul>
            <a href=""><li>contact</li></a>
                <a href=""><li>news</li></a>
            </ul>
        </nav>
    </div>    
    </header>
    <main>

        <?php 
            $CameraReflex = new Camera("nikon", "d7000", 700.00);    
            
            $ComputerApple = new Computer("apple", "MacBookAir", 1600.00);
        ?>
        <div class="container">
            <div class="card">
                <h2>Camera</h2>
                <img src="" alt="">
                <p> <?php echo $CameraReflex->getInfoProduct(); ?></p>
                <h4>price: <?php echo $CameraReflex->getPrice(); ?> €</h4>
            </div>
            
            <div class="card">
                <h2>Computer</h2>
                <img src="" alt="">
                <p> <?php echo $ComputerApple->getInfoProduct(); ?></p>
                <h4>price: <?php echo $ComputerApple->getPrice(); ?> €</h4>
            </div>
        </div>
    </main>
</body>
</html>
