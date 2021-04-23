<?php

namespace App\controllers;
use App\model\Invoice;

class InvoiceController extends Controller
{
    public function home(){
        return $this->view('homeView');
    }
    public function index(){
        $invoice = new Invoice();
        $req = $invoice->listInvoice();
        return $this->view('invoiceView',compact('req'));
    }
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
            $display = new Invoice();
            $req = $display->createInvoices($_POST);
            if($req){
                header('Location: /index');
            }else{
                echo "Pas bon";
            }
        }
    }

    public function deleteInvoice(int $id){
        
        $invoices = new Invoice();
        $req = $invoices->listInvoice();
        $req2 =$invoices->deleteInvoices($id);
        //return $this->view('invoiceView',compact('req','req2'));
        if($req)
        {
           return header('Location: /index');
        }
        else{
           return header('Location: /index');
        }
        //$req2 = $invoices->listInvoice();
    }
}
    
