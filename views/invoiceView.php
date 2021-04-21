<?php $title = 'Invoices'; ?>

    <div class="m-auto w-50">
    <h1 class="m-auto w-50">Invoices</h1>
    <p>list of invoices :</p>
    <table class="table">
    <thead>
        <tr>
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
    <a href="register">ADD</a>
    </div>