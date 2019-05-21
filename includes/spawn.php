<?php 
include 'base_de_donnees.php';

$min_spawn = 1;
$max_spawn = 17;


$random = rand($min_spawn, $max_spawn);
if (isset($_POST['spawn'])) {

    
    if (!isset($_SESSION['map_id']) || (isset($_SESSION['map_id']) && $_SESSION['map_id'] != $random)) {
        $req_existe = random_map($random, $bdd);
    } else {
        $random = rand($min_spawn, $max_spawn);
        $req_existe = random_map($random, $bdd);
    }

    
    
$_SESSION['map'] = $req_existe['nom'];
$_SESSION['map_id'] = $req_existe['id'];
}

function random_map($random, $bdd)
    {
        $req = $bdd->prepare('SELECT * FROM map WHERE id='.$random);
        $req->execute(array($random));
        $req_existe = $req->fetch();
        return $req_existe;
    }


?>