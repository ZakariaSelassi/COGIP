<?php $title = 'Compagnies'; ?>

<?php ob_start(); ?>
<div class="m-auto w-50">
    <h1 class="m-auto w-50">COGIP: Compagnies Directory</h1>
    <p>Clients :</p>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">VAT</th>
        <th scope="col">Country</th>
        </tr>
    </thead>
<?php
   while($data = $req->fetch())
   {?>
       <tbody>
           <tr>
               <td><?= $data['name_company'] ?></td>
               <td><?= $data['vat_company'] ?></td>
               <td><?= $data['country_company'] ?></td>
           </tr>
       </tbody>
   <?php
   }

?>
<div class="m-auto w-50">
    <p>Clients :</p>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">VAT</th>
        <th scope="col">Country</th>
        </tr>
    </thead>
<?php
   while($data = $req->fetch())
   {?>
       <tbody>
           <tr>
               <td><?= $data['name_company'] ?></td>
               <td><?= $data['vat_company'] ?></td>
               <td><?= $data['country_company'] ?></td>
           </tr>
       </tbody>
   <?php
   }
   $req->closeCursor();
?>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>