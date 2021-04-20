<?php $title = 'Invoices'; ?>
<?php ob_start(); ?>
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
    while($data = $req->fetch())
    {?>
        <tbody>
            <tr>
                <td scope="row"><?= htmlspecialchars($data['num_invoices']) ?></td>
                <td><?= $data['date_invoices'] ?></td>
                <td><?= $data['name_company'] ?></td>
                <td><?= $data['type'] ?></td>
            </tr>
        </tbody>
    <?php
    }
    $req->closeCursor();
    ?>
    </table>
    <a href="views/addInvoiceView.php">ADD</a>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php');?>  