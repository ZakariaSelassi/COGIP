<?php

namespace App\controllers;
use App\model\Invoice;

class InvoiceController extends Controller
{
    public function index(){
        return $this->view('homeView');
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
                header('Location: /admin');
            }else{
                echo "Pas bon";
            }
        }/*elseif($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $display = new Invoice();
            $req = $display->createInvoices($_POST);
            if($req){
                header('Location: /admin');
            }else{
                echo "Pas bon";
            }
        }*/
    }

    public function deleteInvoices(){
        var_dump($_POST);
        $invoice =new Invoice();
        $req = $invoice->deleteInvoice();
        var_dump($req);
        return $this->view('invoiceView',compact('req'));

    }
}
    
