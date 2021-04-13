<?php
namespace COGIP\controllers\invoiceController;
require('controllers/invoiceController.php');

// Verifi l'action pour s'avoir qu'elle action appelé 
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'getInvoice') {
        getInvoice();
    }  else {
        echo "something went wrong !";
    } 
        
}else{
    getInvoice();
}
