<style>
    <?php require_once "./CSS/style.css"?>
</style>
<?php require_once 'includes/headerAdmin.php'?>

<h1>Add a new company</h1>

<section>
    <form method="post" action="">
        <div class="input">
            <label for "companyName">Name :</label>
            <input type="text" name="companyName" id="companyName" placeholder="Company's name">
        </div>
        <div class="input">
            <label for "VAT">VAT number :</label>
            <input type="text" name="VAT" id="VAT" placeholder="XX0000000000">
        </div>
        <div class="input">
            <label for "country">Country :</label>
            <input type="text" name="country" id="country" placeholder="">
        </div>
        <div class="input">
            <label for "companyType">Company's type :</label>
            <select name="companyType" id="companyType">
                <option value="none" selected disabled hidden>Select...</option>
                <option>Client</option>
                <option>Supplier</option>
            </select>
        </div>
        <div class="submit">
            <button type="submit" value="submit">Add the company</button>
        </div>
    </form>
</section>