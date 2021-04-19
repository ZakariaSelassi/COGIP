<?php
    // on charge la classe une seul fois
    require_once('model/companies.php');

    function getClients()
    {
        $companies = new \Nadja\COGIP\model\Compagnies();
        $req = $companies>listClients();
        require('views/companiesView.php');
    }

    function getSuppliers()
    {
        $companies = new \Nadja\COGIP\model\Compagnies();
        $req = $companies>listSuppliers();
        require('views/companiesView.php');
    }