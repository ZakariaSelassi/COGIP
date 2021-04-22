<?= 
    require ('../model/object/html.php');
    require ('../model/object/form.php');
?>

<?php ob_start(); ?>
<?php
    echo "<form>";
    $form = new Form();
    echo $form->label("firstName","First name : ");
    echo $form->inputType("text","firstName");
    echo $form->label("lastName","Last name : ");
    echo $form->inputType("text","lastName");
    echo $form->label("telephone","Phone number : ");
    echo $form->inputType("text","telephone");
    echo $form->label("email","E-mail : ");
    echo $form->inputType("text","email");
    echo $form->select("company", $arrayValue=array());
    echo "</form>";
?>


<?php $content = ob_get_clean(); ?>
<?php require('template.php');?>  

