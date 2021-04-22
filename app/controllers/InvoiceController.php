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
            $display = new Invoice();
            $req = $display->createInvoices($_POST);
            if($req){
                header('Location: /');
            }else{
                echo "Pas bon";
            }
            

        }  
    }
    public function delete($id){
       
            $invoice = new Invoice();
            $req = $invoice->deleteInvoices($id);
            var_dump($req);
            if ($req) {
                return $this->view('deleteInvoiceView',compact('req'));
            }
    }
}
    
