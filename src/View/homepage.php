<?php require 'includes/header.php'?>

<h1>Welwome to the Cogip</h1>

<!-- 5 last invoices -->

<h2>Last invoices :</h2>

<?php

foreach ($invoices->getInvoices() as $key => $invoice):
?>

    <p>
        <?= $invoice["invoiceNumber"]." | ".$invoice["invoiceDate"]." | ".$invoice["companyName"]?>
    </p>

<?php endforeach ?>

<!-- 5 last contacts -->

<h2>Last contacts :</h2>

<?php

foreach ($contacts->getContacts() as $key => $contact): ?>
    <p>
        <?= $contact["contactName"]." - ".$contact["phoneNumber"]." - ".$contact["email"]." - ".$contact["company"]?>
    </p>
    
<?php endforeach ?>

<!-- 5 last companies -->

<h2>Last companies :</h2>

<?php

foreach ($companies->getCompanies() as $key => $company): ?>
    <p>
        <?= $company["companyName"]." - ".$company["VAT"]." - ".$company["country"]." - ".$company["companyType"]?>
    </p>
    
<?php endforeach ?>

<?php require 'includes/footer.php'?>