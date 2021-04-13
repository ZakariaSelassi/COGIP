<?php
    // on charge la classe une seul fois
    require_once('model/invoice.php');

    function getInvoice()
    {
        $invoice = new \Zakaria\COGIP\model\Invoice();
        $req = $invoice->listInvoice();
        require('views/invoiceView.php');
    }