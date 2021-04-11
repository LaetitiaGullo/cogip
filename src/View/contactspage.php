<style>
    <?php require_once "./CSS/style.css"?>
</style>
<?php require_once 'includes/header.php'?>

<h1>All contacts</h1>

<?php

foreach ($contacts->getAllContacts() as $key => $contact):
?>

    <p>
        <?= $contact["contactName"]." - ".$contact["phoneNumber"]." - ".$contact["email"]." - ".$contact["company"]?>
    </p>

<?php endforeach ?>

<?php require_once 'includes/footer.php'?>