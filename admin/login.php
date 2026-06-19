<?php

$conn = mysqli_connect("localhost", "root", "", "restaurant");

if(isset($_POST['connexion']))
{
    $nom = trim($_POST['nom']);
    $mdp = trim($_POST['mot_de_passe']);

    $sql = "SELECT * FROM utilisateurs WHERE nom='$nom'";
    $resultat = mysqli_query($conn, $sql);

    if(mysqli_num_rows($resultat) == 1)
    {
        $user = mysqli_fetch_assoc($resultat);

        if(password_verify($mdp, $user['mot_de_passe']))
        {
            echo "Connexion réussie";
        }
        else
        {
            echo "Mot de passe incorrect";
        }
    }
    else
    {
        echo "Utilisateur introuvable";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>JFB</title>
    <link rel="stylesheet" href="../style/login.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cause:wght@100..900&family=Intel+One+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<h2 class="text-center border border-white-2 mx-2 rounded-pill" style="padding: 20px; border-radius: 10px;">Connexion Administration</h2>

<br><br><br>

<form class="col-8 border border-white bg-transparent d-grid gap-2 col-6 mx-auto" method="POST">
    <div class="form-container border-white-2 id gap-2 mx-auto text-center" style="padding: 20px; border-radius: 10px;">
        <input type="text" name="nom" placeholder="Nom d'utilisateur">
        <br><br>

        <input type="password" name="mot_de_passe" placeholder="Mot de passe">

        <br><br>

        <div class="text-center mb-4 rounded-pill row">
            <button type="submit" name="connexion" class="btn btn-filtre btn-primary mx-2 rounded-pill">
                Connexion
            </button>

            <br><br>

            <button class="btn btn-filtre btn-primary mx-2 rounded-pill"><a href="../index.php" style="text-decoration: none; color: white;">
                Retour
            </a></button>

            <br><br>

            <button class="btn btn-filtre btn-primary mx-2 rounded-pill"><a href="utilisateurs.php" style="text-decoration: none; color: white;">
                Ajouter un utilisateur
            </a></button>
        </div>

        </div>

</form>

</body>
</html>