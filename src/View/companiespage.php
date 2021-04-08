<style>
    <?php require_once "./CSS/style.css"?>
</style>
<?php require_once 'includes/header.php'?>

<h1>Companies</h1>

<?php

foreach ($companies->getAllCompanies() as $key => $company):
?>

    <p>
        <?= $company["companyName"]." - ".$company["VAT"]." - ".$company["country"]?>
    </p>

<?php endforeach ?>

<?php require_once 'includes/footer.php'?>