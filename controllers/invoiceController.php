<?php
    namespace controllers;
    // on charge la classe une seul fois
    namespace model;
    function getInvoice()
    {
        $invoice = new Invoice();
        $req = $invoice->listInvoice();
        require('views/invoiceView.php');
    }
    function addInvoice($num_invoice,$date_invoice){
        $create = new Invoice();
        $req = $create->createInvoices($num_invoice,$date_invoice);
        require('views/addInvoiceView.php');
        
    }
