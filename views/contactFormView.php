<?= 
    require ('../app/model/class/html.php');
    require ('../app/model/class/form.php');
?>

<?php $title = 'create Contact'; ?>
<h1 class="m-auto w-50">Contact</h1>
<p>Add contact :</p>

<?php
   
    $form = new Form();
    echo $form->create("/registerContact");
    echo $form->label("firstName","First name : ");
    echo $form->inputType("text","firstName");
    echo $form->label("lastName","Last name : ");
    echo $form->inputType("text","lastName");
    echo $form->label("telephone","Phone number : ");
    echo $form->inputType("text","telephone");
    echo $form->label("email","E-mail : ");
    echo $form->inputType("text","email");
    echo $form->select("companies", $params['req2'],"id_compagnies","name_company");
    echo $form->end();
?>


