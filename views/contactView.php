<<<<<<< HEAD
<?php

    require('html.php');
    require('contactContrelleur');
    
    $html->head();
    $html->meta();
    $html->title();


    while ($data = $req->fetch()) {
        echo "<tr>\n<td>Name</td>\n<td>Telephone</td>\n<td>E-mail</td>\n<td>Company</td>\n</tr>
        <tr>
        <td>'$donnees['id']'</td>
        <td>'$donnees['id']'>'$donnees['name']'</td>
        <td>'$donnees['difficulty']'</td>
        <td>'$donnees['distance']'</td>
        <td>'$donnees['duration']'</td>
        <td>'$donnees['height_difference']'</td>
        <td><a href ='$donnees['id']'\">Supprimer</a></td>
        </tr>";
    }

    ?>
=======
<?= require ('../model/object/html.php')?>
<?php ob_start(); ?>
<h1>COGIP : Contact directory</h1>

<?php
$html = new html();
print $html->displayTableContact($req,"table");
?>

<?php $req->closeCursor(); ?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php');?>  
>>>>>>> bccb5c3ed84376e256268bbb78816821674be54f
