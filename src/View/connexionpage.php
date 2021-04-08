<style>
    <?php require_once "./CSS/style.css"?>
</style>
<?php require_once 'includes/header.php'?>

<h1>Connexion</h1>

<section>
    <form method="post" action="">
        <div class="input">
            <label for "username">Username :</label>
            <input type="email" name="username" id="username" placeholder="example@email.com">
        </div>
        <div class="input">
            <label for "password">Password :</label>
            <input type="password" name="pass" id="pass" placeholder="password">
        </div>
        <div class="submit">
            <button type="submit" value="submit">Sign In</button>
        </div>
    </form>
</section>