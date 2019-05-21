<?php require 'base_de_donnees.php';

if (!empty($_FILES)) {
    
    $file_name = $_FILES['map']['name'];
    $file_extension = strrchr($file_name, ".");

    $file_tmp_name = $_FILES['map']['tmp_name'];
    $file_dest = '../img/'.$file_name;

    $extension_autorisees = array('.jpg', '.JPG', '.png', '.PNG', '.JPEG', '.jpeg');

    if (in_array($file_extension, $extension_autorisees)) {
        if (move_uploaded_file($file_tmp_name, $file_dest)) {
            $req = $bdd->prepare('INSERT INTO map(nom, url) VALUES(?,?)');
            $req->execute(array($file_name, $file_dest));
            echo 'Fichier envoyé avec succès';
        } else {
            echo "Une erreur est survenue !";
        }
        
    } else {
        echo 'Seuls les fichiers de type PNG, JPG et JPEG sont autorisés';
    }
    

    }

?>

 
