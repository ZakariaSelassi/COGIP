<?php
    // on charge la classe une seul fois
    require_once('model/invoice.php');

    function getContact()
    {
        $contact = new \Loïc\COGIP\model\Contact();
        $req = $contact>listContact();
        require('views/contactView.php');
    }