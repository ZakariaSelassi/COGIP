
<?php $title = 'Invoices'; ?>
<?php ob_start(); ?>

    <h1>Invoices</h1>
    <p>list of invoices :</p>
    <?php 
    while($data = $req->fetch())
    {?>
        <div>
            <p><?= htmlspecialchars($data['titre']) ?></p>
            <p> <?= $data['contenu'] ?></p>

        </div>
    <?php
    }
    $req->closeCursor();
    ?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php');?>  