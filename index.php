<?php

include 'config/autoloader.php';
require_once 'config/connexion.php';

$catManager = new CatManager($connexion);
$cats = $catManager->getCat();

// var_dump($cats);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="./process/process_add_cat.php" method="post">
        <input type="text" placeholder="name" name="name" id="name">
        <input type="number" placeholder="age" name="age" id="age">
        <input type="text" placeholder="race" name="race" id="race">
        <input type="text" placeholder="owner" name="owner" id="owner">
        <button type="submit">Créer un chat</button>
    </form>
    

    <section>
        <ul>
            <?php foreach ($cats as $cat) { ?>
                <li><?= $cat->getName() ?></li>
            <?php }?>
        </ul>
    </section>
</body>
</html>