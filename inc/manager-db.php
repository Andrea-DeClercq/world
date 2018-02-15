<?php
require_once 'connect-db.php';

/** Obtenir la liste de tous les pays référencés d'un continent donné
    @param $continent le nom d'un continent
    @return tableau d'objets (des pays)
*/
function getCountriesByContinent($continent) {
   // pour utiliser la variable globale dans la fonction
   global $pdo;
   $query = 'SELECT * FROM Country WHERE Continent = :continent;';
   $prep = $pdo->prepare($query);
   $prep->bindValue(':continent', $continent, PDO::PARAM_STR);
   $prep->execute();
   // var_dump($prep);
   // var_dump($continent);
   return $prep->fetchAll();
}

/** Obtenir la liste des pays
    @return liste d'objets  
*/
function getAllCountries() {
   global $pdo;
   $query = 'SELECT * FROM Country;';
   return $pdo->query($query)->fetchAll();
}
function getCountryById($id){
    global $pdo;
    $query = 'SELECT * FROM Country WHERE id = :id;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $id,PDO::PARAM_INT);
    $prep->execute();
    return $prep->fetch();
}
function getVilleByCountry($idCountry){
    global $pdo;
    $query = 'SELECT * FROM City WHERE idCountry = :idCountry;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':idCountry', $idCountry,PDO::PARAM_INT);
    $prep->execute();
    return $prep->fetchAll();
}

/**
 *  Obtenir le nom d'une ville par rapport a son id
 * @param $idCity Id de la ville recherché
 * @return String le nom de la ville
 */
function getCapitalNameByIdCity($idCity){
    global $pdo;
    $query = 'SELECT Name FROM city where :idCity = id;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':idCity', $idCity,PDO::PARAM_INT);
    $prep->execute();
    return $prep->fetch()->Name;
}


function getAuthentification($pdo,$login,$pass){
    $query = "SELECT * FROM login where login=:login and password=:pass";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->bindValue(':pass', $pass);
    $prep->execute() ;
    // on vérifie que la requête ne retourne qu'une seule ligne
    if($prep->rowCount() == 1){
        $result = $prep->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    else
        return false;
}