<?php
namespace COGIP\controllers\invoiceController;
require('controllers/invoiceController.php');

// Verifi l'action pour savoir qu'elle action appelé 
if (isset($_GET['action'])) {

    if ($_GET['action'] == 'getInvoice') {
        getInvoice();
        
    }
    elseif($_GET['action'] == 'createInvoice')
    {
        
        addInvoice($_POST['invoice'],$_POST['date']);
    }
        
}else{
    getInvoice();
}
