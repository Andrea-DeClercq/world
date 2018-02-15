<?php require_once 'header.php';?>
    <div class="ui container main">
    <div class="ui one column grid">
        <div class="column">
    <form action="connect.php" method="post">
    Votre login : <input type="text" name="login"><br />
    Votre mot de passe : <input type="password" name="pwd"><br />
    <input type="submit" value="Connexion">
</form>
        </div>
</div>
    </div>
<?php
require_once 'javascripts.php';
require_once 'footer.php'; ?>