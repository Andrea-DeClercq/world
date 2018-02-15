<?php require_once 'header.php';?>

<div class="ui container main">
    <div class="ui dropdown">
        <div class="text">Continent</div>
        <i class="dropdown icon"></i>
        <div class="menu">
            <div class="item"><a href="index.php?continent=North%20America">North America</a></div>
            <div class="item"><a href="index.php?continent=South%20America">South America</a></div>
            <div class="item"><a href="index.php?continent=Africa">Africa</a></div>
            <div class="item"><a href="index.php?continent=Europe">Europe</a></div>
            <div class="item"><a href="index.php?continent=Asia">Asia</a></div>
            <div class="item"><a href="index.php?continent=Oceania">Oceania</a></div>
        </div>
    </div>
    <div>
        <?php
        require_once 'inc/manager-db.php';
        $idCountry = $_GET['idCountry'];
        $continent = $_GET['continent'];
        //$capital = $_GET['capital'];
        $ville = getVilleByCountry($idCountry);
        //$pays = getCountriesByContinent($continent);
        $pays = getCountryById($idCountry);
        $capitale = getCapitalNameByIdCity($pays->Capital);
        ?>
    </div>
    <h1>Informations du pays</h1>
    <table class="ui celled table">
        <a class="ui blue ribbon label">Description</a>
        <tr>
            <th>Continent</th>
            <th>Pays</th>
            <th>Capitale</th>
            <th>Population du pays</th>
        </tr>
        <tr>
            <td><?php echo $continent ?></td>
            <td><?php echo $pays->Name ?></td>
            <td><?php echo $capitale ?></td>
            <td><?php $pays->Population ?></td>
        </tr>
    </table>

    <table class="ui celled table">
        <a class="ui red ribbon label">Ville(s) du pays</a>
        <tr>
            <th>Nom</th>
            <th>District</th>
            <th>Population</th>
            <?php
            foreach($ville as $keys=>$values){?>
                <tr>
                    <td><?php echo $ville[$keys]->Name ?></td>
                    <td><?php echo $ville[$keys]->District ?></td>
                    <td><?php echo $ville[$keys]->Population ?></td>
                </tr> <?php } ?>

        </tr>
    </table>
    <p></p>
<?php
require_once 'javascripts.php';
require_once 'footer.php';?>