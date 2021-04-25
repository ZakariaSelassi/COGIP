<?= 
    require ('../app/model/classe/html.php');
    require ('../app/model/classe/form.php');
?>

<?php $title = 'create Contact'; ?>
<h1 class="m-auto w-50">Contact</h1>
<p>Edit contact :</p>

<?php
   
    $form = new App\model\classe\Form();
    echo $form->create("html/COGIP/createContact");
    echo $form->label("firstName","First name : ");
    echo $form->inputType("text","firstName",$params['data']["first_name"]);
    echo $form->label("lastName","Last name : ");
    echo $form->inputType("text","lastName",$params['data']["last_name"]);
    echo $form->label("telephone","Phone number : ");
    echo $form->inputType("text","telephone",$params['data']["telephone"]);
    echo $form->label("email","E-mail : ");
    echo $form->inputType("text","email",$params['data']["email"]);
    echo $form->inputType("text","telephone",$params['data']["name_company"]);;
    echo $form->submit("Edit");
    echo $form->end();
?>