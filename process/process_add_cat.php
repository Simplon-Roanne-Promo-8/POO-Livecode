<?php

require_once '../config/autoloader.php';


if (!empty($_POST['name'])
    && !empty($_POST['age'])
    && !empty($_POST['race'])
    && !empty($_POST['owner'])
) {
    require_once '../config/connexion.php';

    $catManager = new CatManager($connexion);
    $cat = new Cat($_POST['name'], $_POST['age'], $_POST['race'], $_POST['owner']);
    $catManager->addCat($cat);

    header('Location: ../index.php');

}
