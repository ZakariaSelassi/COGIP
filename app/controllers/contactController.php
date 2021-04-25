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
            $req2= $contact->listContactDetailInvoices($id);
            return $this->view('contactDetailsView',compact('req','req2'));
        }

        public function createContact(){
            $create = new Contact();
            $req = $create->listContact();
            $req2 = $create->create();
            return $this->view('contactFormView',compact('req','req2'));
        }

        public function editContact($id){
            $edit = new Contact();
            $req = $edit->listContactDetailEdit($id);
            $data = $req->fetch();
            $req2 = $edit->editContact($id);
            return $this->view('contactEditView',compact('data','req2'));

        }

        public function deleteContact(){
            $delete = new Contact();
            $req = $delete->listContact();
            $delete->deleteContact();
            if($req)
            {
               return header('Location: /listContact');
            }
            else{
               return header('Location: /listContact');
            }

        }
}

