
<?php $title = 'create Invoices'; ?>
<div class="m-auto w-50">

<h1 class="m-auto w-50">Companies</h1>
<div class="p-5 m-auto w-50">
<p>edit invoices :</p>
<?php 
$form = new App\model\classe\Form();
echo $form->create("/home/admin/newCompanies");

echo $form -> label("Company name","Company name");
echo $form->inputType("text","name");
echo $form -> label("TVA number","TVa number");
echo $form->inputType("tva","tva");
echo $form -> label("country","country");
echo $form->inputType("text","country");
echo $form -> label("companies Type","companies Type");
echo $form->select("type", $params['req2'],"id_type_company","type");
echo $form->submit("create");
echo $form->end();
?>
</div>
</div>