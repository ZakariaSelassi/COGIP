<?php



//require('controllers/invoiceController.php');
require '../vendor/autoload.php';

$router = new Router\Router($_GET['url']);


// get url 

$router->get('/controllers', 'controllers\invoiceController.php@getInvoice');
$router->get('/views', 'invoiceController.php@addInvoice');

// Verifi les differents route
$router->run();
// Verifi l'action pour savoir qu'elle action appelé 
/*if (isset($_GET['action'])) {

    if ($_GET['action'] == 'getInvoice') {
        getInvoice();  
    }
    elseif($_GET['action'] == 'createInvoice')
    {
        $invoice = new Invoice();
        if(isset($_POST['submit']))
        {
            print_r($_POST);
            addInvoice($_POST['invoice'],$_POST['date']);
            header('Location:index.php');
        }else{
            echo "error";
        }  
    }

}else{
    getInvoice();
}*/
?>