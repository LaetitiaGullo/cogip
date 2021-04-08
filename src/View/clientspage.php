<style>
    <?php require_once "./CSS/style.css"?>
</style>
<?php require_once 'includes/header.php'?>

<h1>Clients</h1>

<?php

foreach ($clients->getClients() as $key => $client):
?>

    <p>
        <?= $client["companyName"]." - ".$client["VAT"]." - ".$client["country"]?>
    </p>

<?php endforeach ?>

<?php require_once 'includes/footer.php'?>