<?php 
// Redirige vers la page de connexion si on est pas connecté
session_start();

if($_SESSION['id_user'] != 1) 
{
header("Location: connexion.php");
exit();
}
?>



<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="img/logo.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fortnite Admin</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
</head>
<body>
    <form action="includes/deconnexion.php" method="POST">
        <input id="fortnite-btn" type="submit" name="deconnexion" value="Déconnexion" onclick="window.location.href = 'connexion.php'" />
    </form>
    <img id="logo" src="img/logo.png" alt="logo" title="Fortnite">

    <div class="form-style-8">
        <h2>Changer la map</h2>
        <form method="POST" action="includes/change_map.php" enctype="multipart/form-data">
                <input type="file" name="map" required />
                <input type="submit" name="image" value="Envoyer" />
            </form>
    </div>

</body>
</html>