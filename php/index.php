<?php
include 'includes/header.php';

include 'includes/menu.php';

$uri_parts = explode('/', $_SERVER['REQUEST_URI']);
$page = array_pop($uri_parts);

// http://localhost/web1-24-25-2-lab-03/php/index.php?page=products
switch ($_GET['page']) {
    case 'home':
        include 'home.php';
        break;
    case 'products':
        include 'products.php';
        break;
    case 'users':
        include 'users.php';
        break;
    default: 
        echo '<h1>404: Page Not Found!</h1>';
}

include 'includes/footer.php';
    