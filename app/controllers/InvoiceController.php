<?php

namespace App\controllers;
use App\model\Invoice;

class InvoiceController extends Controller
{
    
    public function getInvoice()
    {
        $invoice = new Invoice();
        $req = $invoice->listInvoice();
        return $this->view('invoiceView',compact('req'));
        //require('views/invoiceView.php');
        
    }
    public function creatInvoice(){
        $create = new Invoice();
        $req = $create->createInvoices();
        return $this->view('addInvoiceView',compact('req'));
    }
    public function displayInvoice()
    {
        var_dump($_POST);
        $display = new Invoice();
        $req = $display->createInvoices($_POST);
    }
}
    
