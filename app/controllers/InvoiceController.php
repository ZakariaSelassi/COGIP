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
            $req = $create->companyNames();
            $req2 = $create->createInvoices();
            $req3 = $create->peopleNames();
            return $this->view('addInvoiceView',compact('req','req2','req3'));
    }
    public function displayInvoice()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            var_dump($_POST);
            $display = new Invoice();
            $req = $display->createInvoices($_POST);
        }
       
    }
}
    
