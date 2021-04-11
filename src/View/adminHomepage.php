<style>
    <?php require_once "./CSS/style.css"?>
</style>
<?php require_once 'includes/headerAdmin.php'?>

<h1>Welcome Jean-Christian</h1>

<div class="add-btn">
<a href="/?page=addinvoice">+Invoice</a>
<a href="/?page=addcontact">+Contact</a>
<a href="/?page=addcompany">+Company</a>
</div>
<hr>

<!-- 5 last invoices -->

<h2>Last invoices :</h2>

<?php

foreach ($invoices->getLastInvoices() as $key => $invoice):
?>

    <p>
        <?= $invoice["invoiceNumber"]." | ".$invoice["invoiceDate"]." | ".$invoice["invoiceCompany"]?>
    </p>

<?php endforeach ?>
<hr>

<!-- 5 last contacts -->

<h2>Last contacts :</h2>

<?php

foreach ($contacts->getLastContacts() as $key => $contact): ?>
    <p>
        <?= $contact["contactName"]." - ".$contact["phoneNumber"]." - ".$contact["email"]." - ".$contact["company"]?>
    </p>
    
<?php endforeach ?>
<hr>

<!-- 5 last companies -->

<h2>Last companies :</h2>

<?php

foreach ($companies->getLastCompanies() as $key => $company): ?>
    <p>
        <?= $company["companyName"]." - ".$company["VAT"]." - ".$company["country"]." - ".$company["companyType"]?>
    </p>
    
<?php endforeach ?>

<?php require_once 'includes/footer.php'?>