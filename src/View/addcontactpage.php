<style>
    <?php require_once "./CSS/style.css"?>
</style>
<?php require_once 'includes/headerAdmin.php'?>

<h1>Add a new contact</h1>

<section>
    <form method="post" action="">
        <div class="input">
            <label for "contactName">Name :</label>
            <input type="text" name="contactName" id="contactName" placeholder="Firstname & Lastname">
        </div>
        <div class="input">
            <label for "phoneNumber">Phone number :</label>
            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="5550000">
        </div>
        <div class="input">
            <label for "email">Email address :</label>
            <input type="email" name="email" id="email" placeholder="example@email.com">
        </div>
        <div class="input">
            <label for "company">Company :</label>
            <select name="company" id="company">
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
            <button type="submit" value="submit">Add the contact</button>
        </div>
    </form>
</section>