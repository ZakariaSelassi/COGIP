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
        return $this->view('admin.panels',compact('req'));
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
        }
    }

    public function destroy(int $id_invoices){
        
        $invoices = new Invoice();
        $req = $invoices->destroy($id_invoices);
        if($req)
        {
            return header('Location: /admin/panels');
        }

    }
}
    
