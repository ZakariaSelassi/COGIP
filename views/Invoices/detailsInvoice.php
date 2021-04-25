</table>

<p>Company linked to the invoice :</p>
<table class="table">
<thead>
    <tr>
    <th scope="col">name</th>
    <th scope="col">TVA</th>
    <th scope="col">Type</th>
    </tr>
</thead>
<?php 
foreach($params['req'] as $companies)
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

<p>Contact Person :</p>
<table class="table">
<thead>
    <tr>
    <th scope="col">name</th>
    <th scope="col">TVA</th>
    <th scope="col">Type</th>
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