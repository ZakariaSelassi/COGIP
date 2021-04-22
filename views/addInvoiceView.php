<?php $title = 'create Invoices'; ?>
<h1 class="m-auto w-50">Invoices</h1>
<p>edit invoices :</p>
<?php 
$form = new App\model\Form();
echo $form->create("/register");
echo $form->inputType("text","invoice");
echo $form->inputType("date","date");
echo $form->select("companies", $params['req'],"id_compagnies","name_company");
echo $form->select("people", $params['req3'],"id_people","first_name");
echo $form->submit("create");
echo $form->end();
?>