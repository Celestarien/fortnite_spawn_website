<?php   
session_start();
include "includes/spawn.php";

if (isset($_SESSION['map'])) {
    $map = $_SESSION['map'];
}
        
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="img/logo.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fortnite Spawn</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Anton" />
</head>
<body>
    
    <form method="POST">
        <input id="fortnite-btn" type="submit" name="connexion" value="Connexion" onclick="window.location.href = 'connexion.php'" />
        <input id="fortnite-btn" type="submit" name="spawn" value="Changer de Spawn" onclick="window.location.href = 'index.php'" />
    </form>

    <img id="logo" src="img/logo.png" alt="logo" title="Fortnite">

    <div id="display_spawn">

        <h1 id="title">Spawn :</h1>
        <?php 		
        if(isset($map)){
            echo "<img src=\"img/".$map."\" alt=\"map Fortnite\" title=\"Map fortnite\">";
        }
        ?>
    </div>

</body>
</html>