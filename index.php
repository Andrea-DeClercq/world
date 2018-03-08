<?php require_once 'header.php'; ?>

    <center>
    <br/>
    <h1>Bienvenue sur le site de la team Diablo III</h1>
    <br/>
    <img src="https://www.affairesdegars.com/webroot/usr_img/55912830/diablo-3-ultimate-evil-edition_1.jpeg" alt="Diablo picture" style="width:1280px;height:720px;">
    <br/><br/>
    </center>

    <div class="ui one column grid">
        <div class="column">
            <div class="ui raised segment">
                <a class="ui red ribbon label">Tableau d'objets</a>
                <p>Le code ci-dessus représente une vue "debug" du premier élément d'un tableau. Ce tableau est
                    constitué d'objets PHP "standard" (stdClass).</p>
                <p>Pour accéder à l'<b>attribut</b> d'un <b>objet</b> on utilisera le symbole <b>-></b></p>
                <p>Ainsi, pour accéder au nom du premier pays de la liste
                <code>$pays</code> on fera <b><code>$pays[0]->Name</code></b>
                </p>
                <p>La variable <b><code>$pays</code></b> référence un tableau (<i>array</i>).
                    Ainsi, pour générer le code HTML (table), devriez vous coder une boucle,
                    par exemple de type <b><code>foreach</code></b> sur l'ensembles des objets de ce tableau. </p>
                <p>Référez-vous à la structure des tables pour connaître le nom des <b><code>attributs</code></b>.
                    En effet, les objets du tableau ont pour attributs (nom et valeur)
                    le nom des colonnes de la table interrogée par un requête SQL, via l'appel à la
                    fonction <b><code>getCountriesByContinent</code></b> (du script <b><code>manager-db.php</code></b>.</p>
                <p>Par exemple <b><code>Name</code></b> est une des colonnes de la relation (table) <b><code>Country</code></b>)</p>
            </div>
        </div>
    </div>

<?php
require_once 'javascripts.php';
require_once 'footer.php'; ?>