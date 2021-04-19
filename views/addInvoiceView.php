<?php require_once('../model/form.php'); ?>
<?php $title = 'create Invoices'; ?>
<?php ob_start(); ?>
    <h1 class="m-auto w-50">Invoices</h1>
    <p>edit invoices :</p>
    <?php 
     $form = new Form();
    echo $form->create("invoiceView.php");
    echo $form->inputType("text","invoice");
    echo $form->inputType("date","date");
    echo $form->select("companies",$arrayValue=array("Bleu","gris","rouge"));
    echo $form->submit("create");
    echo $form->end();
    //$req->closeCursor();
    ?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php');?>  