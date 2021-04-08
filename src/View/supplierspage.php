<style>
    <?php require_once "./CSS/style.css"?>
</style>
<?php require_once 'includes/header.php'?>

<h1>Suppliers</h1>

<?php

foreach ($suppliers->getSuppliers() as $key => $supplier):
?>

    <p>
        <?= $supplier["companyName"]." - ".$supplier["VAT"]." - ".$supplier["country"]?>
    </p>

<?php endforeach ?>

<?php require_once 'includes/footer.php'?>