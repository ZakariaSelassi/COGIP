<?php
    // on charge la classe une seul fois
    namespace App\controllers;
    use App\model\Contact;
    class ContactController extends Controller{

        public function getContact(){
            $contact = new Contact();
            $req = $contact->listContact();
            require('../views/contactView.php');
        }

        public function getContactDetails(){
            $contact = new Contact();
            $req = $contact->listContact();
            $req2= $contact->listContactInvoices();
            return $this->view('contactDetailsView',compact('req','req2'));
        }

        public function createContact(){
            $create = new Contact();
            $req = $create->create();
            $req2 = $create->listContact();
            return $this->view('contactFormView',compact('req','req2'));
        }

        /*public function deleteContact(){

        }*/
}

