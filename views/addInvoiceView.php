<?php $title = 'create Invoices'; ?>
<h1 class="m-auto w-50">Invoices</h1>
<p>edit invoices :</p>
<?php 
$form = new App\model\Form();
echo $form->create("/register");
echo $form->inputType("text","invoice");
echo $form->inputType("date","date");
echo $form->select("companies",$arrayValue=array("Bleu","gris","rouge"));
echo $form->submit("create");
echo $form->end();
?>