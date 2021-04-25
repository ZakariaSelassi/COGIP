
<?php $title = 'create Invoices'; ?>
<div class="m-auto w-50">

<h1 class="m-auto w-50">Invoices</h1>
<div class="p-5 m-auto w-50">
<p>edit invoices :</p>
<?php 
$form = new App\model\classe\Form();
echo $form->create("/home/admin/newInvoices");
echo $form->inputType("text","invoice");
echo $form->inputType("date","date");
echo $form->select("companies", $params['req'],"id_compagnies","name_company");
echo $form->select("people", $params['req3'],"id_people","first_name");
echo $form->submit("create");
echo $form->end();
?>
</div>
</div>