<?php require_once 'includes/header.php'?>

<h1>Invoices</h1>

<?php

foreach ($invoices->getAllInvoices() as $key => $invoice):
?>

    <p>
        <?= $invoice["invoiceNumber"]." | ".$invoice["invoiceDate"]." | ".$invoice["companyName"]?>
    </p>

<?php endforeach ?>

<?php require_once 'includes/footer.php'?>