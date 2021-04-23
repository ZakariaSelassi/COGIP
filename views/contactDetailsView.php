<?= require ('../app/model/class/html.php')?>
<h1>COGIP : Contact directory</h1>
<?php
$html = new html();
print $html->displayTableContact($req,"table");
?>
<?php $req->closeCursor(); ?>
