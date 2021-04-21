<?php
use Router\Router;
//require('controllers/invoiceController.php');
require '../vendor/autoload.php';
//chemin qui pointe vers nos vues , DIR tout seul permet d'appelé le dossier dans le quel on se trouve
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);
// get url 

$router->get('/', 'App\controllers\InvoiceController@getInvoice');
$router->get('/register', 'App\controllers\InvoiceController@creatInvoice');

    $router->post('/register' ,'App\controllers\InvoiceController@displayInvoice');


// Verifi les differents route
$router->run();
?>