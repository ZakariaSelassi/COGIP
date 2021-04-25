
<?php $title = 'contactCreate'; ?>
<h1 class="m-auto w-50">Contact</h1>
<p>Add contact :</p>

<?php
   
    $form = new App\model\classe\Form();
    echo $form->create("/html/COGIP/contactCreate");
    echo $form->label("firstName","First name : ");
    echo $form->inputType("text","firstName","ex : Bill");
    echo $form->label("lastName","Last name : ");
    echo $form->inputType("text","lastName","ex : Gate");
    echo $form->label("telephone","Phone number : ");
    echo $form->inputType("text","telephone","ex : 0498 12 34 56");
    echo $form->label("email","E-mail : ");
    echo $form->inputType("text","email","ex : billgate@outlook.com");
    echo $form->select("companies", $params['req'],"id_compagnies","name_company");
    echo $form->submit("Add");
    echo $form->end();
?>


