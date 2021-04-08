<style>
    <?php require_once "./CSS/style.css"?>
</style>
<?php require_once 'includes/header.php'?>

<h1>Inscription</h1>

<section>
    <form method="post" action="">
        <div class="input">
            <label for "username">Username :</label>
            <input type="text" name="username" id="username" placeholder="example@email.com">
        </div>
        <div class="input">
            <label for "pass">Password :</label>
            <input type="password" name="pass" id="pass" placeholder="password">
        </div>
        <div class="input">
            <label for "conf-pass">Confirm your password :</label>
            <input type="password" name="conf-pass" id="conf-pass" placeholder="confirm password">
        </div>
        <div class="submit">
            <button type="submit" value="submit">Sign Up</button>
        </div>
    </form>
</section>