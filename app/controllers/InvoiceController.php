<?php

namespace App\controllers;
use App\model\Invoice;

class InvoiceController extends Controller
{
    //recupere data pour admin {
    public function adminDetails()
    {
        $invoice = new Invoice();
        $req = $invoice->lastInvoice();
        $req2 = $invoice->lastCompanies();
        return $this->view('admin', compact('req', 'req2'));
    }
    // Recupere tout les data pour home
    public function allDetails()
    {
        $invoice = new Invoice();
        $req = $invoice->lastCompanies();
        $req2 = $invoice->lastInvoice();
        return $this->view('home', compact('req', 'req2'));
    }
    // Affiche toutes les factures sur invoices
    public function allInvoice()
    {
        $invoice = new Invoice();
        $req = $invoice->allInvoice();
        return $this->view('Invoices.invoices', compact('req'));
    }

    public function companyNames()
    {
        $invoice = new Invoice();
        $req = $invoice->companyNames();
        $req2 = $invoice->peopleNames();
        return $this->view('Invoices.detailsInvoice', compact('req', 'req2'));
    }
    // Ajoute nouvelle facture
    public function creatInvoice()
    {
        $create = new Invoice();
        $req = $create->companyNames();
        $req2 = $create->createInvoices();
        $req3 = $create->peopleNames();
        return $this->view('Invoices.Invoiceform', compact('req', 'req2', 'req3'));
    }
    public function sendSubmit()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $display = new Invoice();
            $req = $display->createInvoices($_POST);
            if ($req) {
                header('Location: /home/admin');
            } else {
                echo "Pas bon";
            }
        }
    }
}
