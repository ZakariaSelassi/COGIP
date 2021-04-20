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