<?php 

session_start();

if (isset($_POST['connexion'])) {
    $user = htmlspecialchars($_POST['user']);
    $mdp = md5($_POST['pass']);
    if (!empty($user) AND !empty($mdp)) {
        
        $link = mysqli_connect( 'localhost', 'root', '', 'fortnite' ) ;
        $pseudo = $user;
        $query = "SELECT * FROM compte WHERE username = '$pseudo' ";
        $query_mdp = "SELECT * FROM compte WHERE pass = '$mdp' ";
        $resultat =  mysqli_query($link, $query) ;
        $resultat_mdp =  mysqli_query($link, $query_mdp) ;
        $row = mysqli_fetch_array($resultat, MYSQLI_ASSOC) ;    
        $row_mdp = mysqli_fetch_array($resultat_mdp, MYSQLI_ASSOC) ;    
        if (mysqli_num_rows($resultat) != 0 && mysqli_num_rows($resultat_mdp) !=0 )
             {
                $_SESSION['id_user'] = 1;
                header("Location: admin.php");
                exit();
             }
        else {
            echo "<center><p>Id ou mot de passe incorrect !</p></center>";
        }

    } else {
        echo "<center><p>Erreur champ vide !</p></center>";
    }
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
    <input id="fortnite-btn" type="submit" name="back" value="Retour" onclick="window.location.href = 'index.php'" />
    <img id="logo" src="img/logo.png" alt="logo" title="Fortnite">
    <div class="form-style-8">
        <h2>Connexion Admin</h2>
        <form method="POST">
            <input type="text" name="user" placeholder="Username" />
            <input type="password" name="pass" placeholder="Password" />
            <input type="submit" name="connexion" value="Connexion" />
        </form>
    </div>


</body>
</html>