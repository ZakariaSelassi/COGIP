</table>

<p>Contact :</p>
<table class="table">
<thead>
    <tr>
    <th scope="col">name</th>
    <th scope="col">Phone</th>
    <th scope="col">Email</th>
    </tr>
</thead>
<?php 
foreach($params['req'] as $factures)
{?>
    <tbody>
        <tr>
            <td scope="row"><?= htmlspecialchars($companies['name_company']) ?></td>
            <td><?= $companies['vat_company'] ?></td>
            <td><?= $companies['type'] ?></td>
        </tr>
    </tbody>
<?php
}
?>
</table>

</table>

<p>Factures :</p>
<table class="table">
<thead>
    <tr>
    <th scope="col">Invoice number</th>
    <th scope="col">Date</th>
    <th scope="col">Contact Person</th>
    </tr>
</thead>
<?php 
foreach($params['req2'] as $companies2)
{?>
    <tbody>
        <tr>
            <td scope="row"><?= htmlspecialchars($companies2['first_name']) ?></td>
            <td><?= $companies2['email'] ?></td>
            <td><?= $companies2['telephone'] ?></td>
        </tr>
    </tbody>
<?php
}
?>
</table>