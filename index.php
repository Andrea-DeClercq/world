<?php require_once 'header.php';
session_start ();?>
// On teste pour voir si nos variables de session ont bien été enregistrées

<div class="ui container main">
    <div class="ui dropdown">
        <div class="text">Continent</div>
        <i class="dropdown icon"></i>
        <div class="menu">
            <div class="item"><a href="?continent=North%20America">North America</a></div>
            <div class="item"><a href="?continent=South%20America">South America</a></div>
            <div class="item"><a href="?continent=Africa">Africa</a></div>
            <div class="item"><a href="?continent=Europe">Europe</a></div>
            <div class="item"><a href="?continent=Asia">Asia</a></div>
            <div class="item"><a href="?continent=Oceania">Oceania</a></div>
        </div>
    </div>
    <div>
      <?php
      require_once 'inc/manager-db.php';
      if (isset($_GET['continent'])){
          $continent = $_GET['continent'];
      }
       else {
          $continent = '';

      $pays = getCountriesByContinent($continent);
      //var_dump($pays[0]);
      if (isset($_SESSION['nom']) && isset($_SESSION['role'])) {
          echo "<p style=text-align:left;>Bienvenue : " . $_SESSION['nom'] . "(" . $_SESSION['role'] . ")";
          echo '<br><a href="./logout.php">Deconnexion</a></p>';
      }
        ?>
    </div>
    <h1><?php echo $continent ?></h1>
    <table class="ui celled table">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Continent</th>
            <th>Region</th>
            <th>Surface du pays</th>
            <th>Année d'indépendance</th>
            <th>Population</th>
                <?php
                foreach($pays as $p ){
                    $href = "<a href='pays.php?idCountry=" . $p->id . "&amp;continent=" . $p->Continent . "'>";
                    ?>
                    <tr>
                    <td><?php echo $href.$p->Name ?></a></td>
                    <td><?php echo $p->Continent ?></td>
                    <td><?php echo $p->Region ?></td>
                    <td><?php echo $p->SurfaceArea ?></td>
                    <td><?php echo $p->IndepYear ?></td>
                    <td><?php echo $p->Population ?></td>
                    </tr>
                    <?php }?>
        </thead>
    </table>
    <p></p>
    <?php  } ?>
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
</div>

<?php
require_once 'javascripts.php';
require_once 'footer.php'; ?>