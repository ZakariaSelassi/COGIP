<?php
    // on charge la classe une seul fois
    require_once('../model/contactDetails.php');

    function getContactDetails(){
        $contact = new ContactDetails();
        $req = $contact->listContactDetails();
        require('../views/contactDetailsView.php');
    }

    getContact();
