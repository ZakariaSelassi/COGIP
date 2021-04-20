<?php
    // on charge la classe une seul fois
    require_once('./model/compagnies.php');

    function getClients()
    {
        $companies = new \Nadja\COGIP\model\Compagnies();
        $req = $companies->listClients();
        require('./views/compagniesView.php');
    }

    function getSuppliers()
    {
        $companies = new \Nadja\COGIP\model\Compagnies();
        $req = $companies->listSuppliers();
        require('./views/compagniesView.php');
    }