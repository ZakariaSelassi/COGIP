<?php
    // on charge la classe une seul fois
    require_once('../model/contact.php');

    function getContact(){
        $contact = new Contact();
        $req = $contact->listContact();
        require('../views/contactView.php');
    }

    getContact();

