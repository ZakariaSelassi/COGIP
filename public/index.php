<?php
use Router\Router;
//require('controllers/invoiceController.php');
require '../vendor/autoload.php';
//chemin qui pointe vers nos vues , DIR tout seul permet d'appelé le dossier dans le quel on se trouve
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);
// get url


$router->get('/listinvoices', 'App\controllers\InvoiceController@getInvoice');
$router->get('/listContact', 'App\controllers\ContactController@getContact');
$router->get('/createContact', 'App\controllers\ContactController@createContact');
$router->get('/contactDetail/:id', 'App\controllers\ContactController@getContactDetails');
$router->get('/contactDelete/:id', 'App\controllers\ContactController@contactDelete');
$router->get('/contactEdit/:id', 'App\controllers\ContactController@editContact');
// Verifi les differents route
$router->get('/', 'App\controllers\InvoiceController@home'); 
$router->get('/', 'App\controllers\InvoiceController@home');
$router->get('/index', 'App\controllers\InvoiceController@index');
$router->get('/register', 'App\controllers\InvoiceController@creatInvoice');
$router->post('/register', 'App\controllers\InvoiceController@displayInvoice');

/*********/
$router->get('/deleteInvoice/:id', 'App\controllers\InvoiceController@deleteInvoice');
$router->run();
?>