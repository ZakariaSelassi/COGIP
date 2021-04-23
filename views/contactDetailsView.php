<?= require ('../app/model/class/html.php')?>
<h1>COGIP : Contact directory</h1>
<?php
$html = new html();
print $html->displayContactDetailPeople($req);
print $html->displayContactDetailInvoices($req2,"table2");
?>
<?php $req->closeCursor(); ?>
