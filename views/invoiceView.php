<?php $title = 'Invoices'; ?>

    <div class="m-auto w-50">
    <h1 class="m-auto w-50">Invoices</h1>
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
                    <a href="/admin/deleteInvoices/<?= $req['id_invoices'] ?>" name="delete" class="btn btn-danger">Delete</a>
               </td>
            </tr>
        </tbody>
    <?php
    }
    ?>
    </table>
    <a href="/register">ADD</a>
    </div>