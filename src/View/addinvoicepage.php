<style>
    <?php require_once "./CSS/style.css"?>
</style>
<?php require_once 'includes/headerAdmin.php'?>

<h1>Add a new invoice</h1>

<section>
    <form method="post" action="">
        <div class="input">
            <label for "invoiceNumber">Number :</label>
            <input type="text" name="invoiceNumber" id="invoiceNumber" placeholder="X20210101-001">
        </div>
        <div class="input">
            <label for "invoiceDate">Date :</label>
            <input type="date" name="invoiceDate" id="invoiceDate" placeholder="2021-01-01">
        </div>
        <div class="input">
            <label for "invoiceCompany">Company :</label>
            <select name="invoiceCompany" id="invoiceCompany">
            <option value="none" selected disabled hidden>Select...</option>
                <optgroup label="Clients :">
                    <option>Raviga</option>
                    <option>Dunder Mifflin</option>
                    <option>Jouets Jean-Michel</option>
                    <option>Bob Vance Refrig.</option>
                    <option>Mutiny</option>
                    <option>Phoque Off</option>
                </optgroup>
                <optgroup label="Suppliers :">
                    <option>Belgalol</option>
                    <option>Pierre Cailloux</option>
                    <option>Proximdr</option>
                    <option>ElectricPower</option>
                    <option>Hooli</option>
                    <option>Pied Pipper</option>
                </optgroup>
            </select>
        </div>
        <div class="submit">
            <button type="submit" value="submit">Add the invoice</button>
        </div>
    </form>
</section>

<!-- <?php foreach ($companies->getAllCompanies() as $key => $company):?>
<?= $company["companyName"]?>
<?php endforeach ?> -->