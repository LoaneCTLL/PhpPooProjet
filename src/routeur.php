<?php
require_once __DIR__ . "/Controller/ProductController.php";
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';


    if ($page == 'accueil' || $page == "") {
        include 'View/accueil.php';
    } else if ($page == 'create') {
        include 'View/create.php';
    }
    else if ($page == 'register') {
        ProductController::createProduct();
    }
    elseif ($page == 'delete') {
        include 'View/delete.php';
    }
    else {
        include 'View/accueil.php';
    }

