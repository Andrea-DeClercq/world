<?php require_once 'header.php'; ?>
</br>
<center><h1>Bienvenue sur votre profil</h1></center>

    <div class="ui two column centered grid">
        <div class="column">
            <div class="ui raised segment">
                <a class="ui purple ribbon label">Vos données</a>
                <p>Pseudo  : <?php echo $_SESSION['login'] ?></p>
                <p>Role : <?php if ($_SESSION['role']=='normal')
                    echo "Utilisateur" ;
                    if ($_SESSION ['role']=='admin')
                    echo "Admin"; ?>
                </p>
            </div>
        </div>
    </div>
<?php
require_once 'javascripts.php';
require_once 'footer.php'; ?>