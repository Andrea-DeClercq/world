<?php require_once 'header.php';?>

<div class="ui container main">
    <div class="ui one column centered grid">
        <div class="column">
            <div class="ui raised segment">
                <a class="ui red ribbon label">Login</a>
                     <form class="ui form" action="connect.php" method="post">
                         <div class="field">
                             <label for="login">Votre login : </label>
                             <input id="login" type="text" name="login">
                         </div><br />
                         <div class="field">
                             <label for="password">Votre mot de passe : </label>
                             <input id="password" type="password" name="pwd">
                         </div><br />
                        <input class="ui button" type="submit" value="Connexion">
                     </form><br/>
                    <form class="ui form" action="newuser.php" method="post">
                        <input class="ui button" type="submit" value="Nouveau Utilisateur">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'javascripts.php';
require_once 'footer.php'; ?>