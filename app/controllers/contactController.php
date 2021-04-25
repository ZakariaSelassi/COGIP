<?php
    // on charge la classe une seul fois
    namespace App\controllers;
    use App\model\Contact;
    class ContactController extends Controller{

        public function getContact(){
            $contact = new Contact();
            $req = $contact->listContact();
            return $this->view('Contact.contactView',compact('req'));
        }

        public function getContactDetails($id){
            $contact = new Contact();
            $req = $contact->listContactDetail($id);
            $req2= $contact->listContactDetailInvoices($id);
            return $this->view('Contact.contactDetailsView',compact('req','req2'));
        }

        public function createContact(){
            $create = new Contact();
            $req = $create->listContact();
            $req2 = $create->create();
            return $this->view('Contact.contactFormView',compact('req','req2'));
        }

        public function sendSubmitAdd()
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $display = new Contact();
                $req = $display->create($_POST);
                if ($req) {
                    header('Location: /home/admin');
                } else {
                    echo "Pas bon";
                }
            }
        }

        public function editContact($id){
            $edit = new Contact();
            $req = $edit->listContactDetailEdit($id);
            $data = $req->fetch();
            $req2 = $edit->editContact();
            return $this->view('Contact.contactEditView',compact('data','req2'));

        }

        public function sendSubmitEdit()
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $display = new Contact();
                $req = $display->editContact();
                if ($req) {
                    header('Location: /home/admin');
                } else {
                    echo "Pas bon";
                }
            }
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

