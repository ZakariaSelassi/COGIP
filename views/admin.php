<?php $title = 'Invoices'; ?>
<nav class="menum navbar navbar-light navbar-expand-md justify-content-center fixed-top">
    <div class="container">
        <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
            <ul class="topBotomBordersOut navbar-nav mx-auto text-center">
                <li class="nav-item active">
                <a class="nav-link" href="/home">Home</a>
                    </li>
                <li class="nav-item"> <a class="nav-link" href="/home/invoices">Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="/home/companies">Companies</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/contact">Contact</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/admin">Admin(test)</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/connexion">Connexion</a>  
                </li>
            </ul>
        </div>
    </div>   
</nav>
<div class="p-5 m-auto w-50">
        <div>   
            <a href="/home/admin/newInvoices">ADD New Invoices</a>
            <a href="/home/admin/newCompanies">ADD New Contacts</a>
            <a href="/home/admin/newCompanies">ADD New Company</a>
        </div>
    <p class="m-auto w-50">list of invoices :</p>
        <table class="table">
            <thead>
                <tr>
                <th>number</th>
                <th scope="col">Invoice Number</th>
                <th scope="col">Date</th>
                <th scope="col">Compagnies</th>
                <th scope="col">Type</th>
                <th scope="col">action</th>

                </tr>
            </thead>
    <?php 
    foreach($params['req'] as $req)
    {?>
        <tbody>
            <tr>
                <td><?= $req['id_invoices'] ?></td>
                <td scope="row"><?= htmlspecialchars($req['num_invoices']) ?></td>
                <td><?= $req['date_invoices'] ?></td>
                <td><?= $req['name_company'] ?></td>
                <td><?= $req['type'] ?></td>
                <td>
                    <a href="/deleteInvoice/<?= $req['id_invoices']?>" name="delete" class="btn btn-danger">Delete</a>
               </td>
            </tr>
        </tbody>
    <?php
    }
    ?>
    </table>
<div>
    <div class="p-5 m-auto w-50">
    <p>Last companies :</p>
    <table class="table">
    <thead>
        <tr>
        <th>number</th>
        <th scope="col">name</th>
        <th scope="col">TVA</th>
        <th scope="col">Country</th>
        <th scope="col">Type</th>
        </tr>
    </thead>
    <?php 
    foreach($params['req2'] as $companies)
    {?>
        <tbody>
            <tr>
                <td><?= $companies['id_compagnies'] ?></td>
                <td scope="row"><?= htmlspecialchars($companies['name_company']) ?></td>
                <td><?= $companies['country_company'] ?></td>
                <td><?= $companies['vat_company'] ?></td>
                <td><?= $companies['type'] ?></td>
                <td>
                    <a href="/deleteCompany/<?= $companies['id_compagnies']?>" name="delete" class="btn btn-danger">Delete</a>
               </td>
            </tr>
        </tbody>
    <?php
    }
    ?>
    </table>
