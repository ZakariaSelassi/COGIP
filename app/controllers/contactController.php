<?php
    // on charge la classe une seul fois
    namespace App\controllers;
    use App\model\Contact;
    class ContactController extends Controller{

        public function getContact(){
            $contact = new Contact();
            $req = $contact->listContact();
            return $this->view('contactView',compact('req'));
        }

        public function getContactDetails($id){
            $contact = new Contact();
            $req = $contact->listContactDetail($id);
            $req2= $contact->listContactInvoices($id);
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

