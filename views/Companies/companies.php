
<?php $title = 'home'; ?>
<nav class="menum navbar navbar-light navbar-expand-md justify-content-center fixed-top">
    <div class="container">
        <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
            <ul class="topBotomBordersOut navbar-nav mx-auto text-center">
                <li class="nav-item active">
                <a class="nav-link" href="/home">Home</a>
                    </li>
                <li class="nav-item"> <a class="nav-link" href="/home/invoices">Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="/home/companies">Companies</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/admin">Admin(test)</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/contact">Contact</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/connexion">Connexion</a>  
                </li>
            </ul>
        </div>
    </div>   
</nav>
<div class="p-5 m-auto w-50">
    <h1>COGIP : companies</h1>
    <?php

    require ('../app/model/classe/html.php');
    $table = new Html();
    print $table->displayCompany($params['req'],"tableCompany");

    /*<table class="table">
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
    foreach($params['req'] as $companies)
    {?>
        <tbody>
            <tr>
                <td><?= $companies['id_compagnies'] ?></td>
                <td scope="row"><?= htmlspecialchars($companies['name_company']) ?></td>
                <td><?= $companies['country_company'] ?></td>
                <td><?= $companies['vat_company'] ?></td>
                <td><?= $companies['type'] ?></td>
            </tr>
        </tbody>
    <?php
    }
    ?>
    </table>*/
    ?>
    <div>