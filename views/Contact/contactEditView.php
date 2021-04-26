<?= 
    require ('../app/model/classe/html.php');
    require ('../app/model/classe/form.php');
?>

<?php $title = 'create Contact'; ?>
<h1 class="m-auto w-50">Contact</h1>
<p>Edit contact :</p>

<?php
   
    $form = new App\model\classe\Form();
    echo $form->create("/home/listContact");
    echo $form->label("idPeople","Id Contact : ");
    echo $form->inputType("text","idPeople",$params['data']["id_people"]);
    echo $form->label("firstName","First name : ");
    echo $form->inputType("text","firstName",$params['data']["first_name"]);
    echo $form->label("lastName","Last name : ");
    echo $form->inputType("text","lastName",$params['data']["last_name"]);
    echo $form->label("telephone","Phone number : ");
    echo $form->inputType("text","telephone",$params['data']["telephone"]);
    echo $form->label("email","E-mail : ");
    echo $form->inputType("text","email",$params['data']["email"]);
    echo $form->submit("Edit");
    echo $form->end();
?>