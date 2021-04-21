<?php

require_once('../model/object/form.php');

?>

<?php ob_start(); ?>

<?php
$form = new Form();
print $form->create('compagniesView');
print $form->label('company','Company name');
print $form->inputType('text','compagnies');
print $form->label('VAT','VAT number');
print $form->inputType('text','VAT');
print $form->label('telephone','Phone');
print $form->inputType('text','Phone');
print $form->select('compagnies', $arrayValue=array('Raviga', 'Dunder Mifflin','Jouets Jean-Michel'));
print $form->submit('Submit');
print $form->end();

?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php');?> 

