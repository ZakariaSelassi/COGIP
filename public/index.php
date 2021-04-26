<?php
use Router\Router;
//require('controllers/invoiceController.php');
require '../vendor/autoload.php';
//chemin qui pointe vers nos vues , DIR tout seul permet d'appelé le dossier dans le quel on se trouve
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);
/** Invoices */
$router->get('/home', 'App\Controllers\InvoiceController@allDetails');
$router->get('/home/invoices',  'App\Controllers\InvoiceController@allInvoice');
$router->get('/home/admin',  'App\Controllers\InvoiceController@adminDetails');
$router->get('/home/admin/newInvoices', 'App\Controllers\InvoiceController@creatInvoice');
$router->post('/home/admin/newInvoices', 'App\Controllers\InvoiceController@sendSubmit');
/** Contact */
$router->get('/home/contact', 'App\controllers\ContactController@getContact');
$router->get('/home/newContact', 'App\controllers\ContactController@createContact');
$router->post('/home/newContact', 'App\controllers\ContactController@sendSubmitAdd');
$router->get('/home/contactDetail/:id', 'App\controllers\ContactController@getContactDetails');
$router->get('/home/contactDelete/:id', 'App\controllers\ContactController@deleteContact');
/*$router->get('/home/contactEdit/:id', 'App\controllers\ContactController@editContact');
$router->post('/home/contactEdit/:id', 'App\controllers\ContactController@sendSubmitEdit');*/
/****Line en dessous a modifier pour ajouter contact personne + companies */
$router->get('/home/invoices/details/', 'App\Controllers\InvoiceController@companyNames');

/** Companies */    
$router->get('/home/companies',  'App\Controllers\CompaniesController@allCompanies');
$router->get('/home/admin',  'App\Controllers\CompaniesController@adminDetails');
$router->get('/home/admin/newCompanies', 'App\Controllers\CompaniesController@creatCompanies');
$router->post('/home/admin/newCompanies', 'App\Controllers\CompaniesController@sendSubmit');
$router->run();
?>