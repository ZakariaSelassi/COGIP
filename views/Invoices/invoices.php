
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
                <li class="nav-item"> <a class="nav-link" href="/home/contact">Contact</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/admin">Admin(test)</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/connexion">Connexion</a>  
                </li>
            </ul>
        </div>
    </div>   
</nav>
<div class="p-5 m-auto w-50">
    <h1>COGIP : list of invoices</h1>
    <table class="table">
    <thead>
        <tr>
        <th>number</th>
        <th scope="col">Invoice Number</th>
        <th scope="col">Date</th>
        <th scope="col">Compagnies</th>
        <th scope="col">Type</th>
        </tr>
    </thead>
    <?php 
    foreach($params['req'] as $req)
    {?>
        <tbody>
            <tr>
                <td><a href="/home/invoices/details"><?= $req['id_invoices'] ?></a></td>
                <td scope="row"><?= htmlspecialchars($req['num_invoices']) ?></td>
                <td><?= $req['date_invoices'] ?></td>
                <td><?= $req['name_company'] ?></td>
                <td><?= $req['type'] ?></td>
            </tr>
        </tbody>
    <?php
    }
    ?>
    </table>
    <div>