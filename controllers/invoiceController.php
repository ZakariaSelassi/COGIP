<?php
    // on charge la classe une seul fois
    require_once('model/invoice.php');
    require_once('model/form.php');
    function getInvoice()
    {
        $invoice = new \Zakaria\COGIP\model\Invoice();
        $req = $invoice->listInvoice();
        require('views/invoiceView.php');
    }
    function addInvoice($num_invoice,$date_invoice){
        $create = new \Zakaria\COGIP\model\Invoice();
        $req = $create->createInvoices($num_invoice,$date_invoice);
        require('views/addInvoiceView.php');
    }
