<?php require_once 'header.php';
require_once 'inc/manager-db.php';
$continent = $_GET['continent'];
$pays = getCountriesByContinent($continent);
//var_dump($pays[0]);
if (isset($_SESSION['nom']) && isset($_SESSION['role'])) {
    echo "<p style=text-align:left;>Bienvenue : " . $_SESSION['nom'] . "(" . $_SESSION['role'] . ")";
    echo '<br><a href="./logout.php">Deconnexion</a></p>';
}
?>
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
</table>
<?php
require_once 'javascripts.php';
require_once 'footer.php'; ?>