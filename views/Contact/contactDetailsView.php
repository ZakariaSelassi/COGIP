<?= require ('../app/model/classe/html.php')?>
<h1>COGIP : Contact directory</h1>
<?php
$html = new html();
print $html->displayContactDetailPeople($params['req']);
print $html->displayContactDetailInvoices($params['req2'],"table2");
?>

