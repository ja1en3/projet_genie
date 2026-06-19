<?php

$conn = mysqli_connect("localhost", "root", "", "restaurant");

$message = "";

if(isset($_POST['ajouter']))
{
    $nom = trim($_POST['nom']);
    $mot_de_passe = trim($_POST['mot_de_passe']);
    $adresse = trim($_POST['adresse']);
    $numero = trim($_POST['numero']);
    $role = $_POST['role'];

    $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilisateurs(nom, mot_de_passe, adresse, numero, role)
            VALUES('$nom', '$mot_de_passe_hache', '$adresse', '$numero', '$role')";

    if(mysqli_query($conn, $sql))
    {
        $message = "Utilisateur ajouté avec succès";
    }
    else
    {
        $message = "Erreur lors de l'ajout";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>JFB</title>
    <link rel="stylesheet" href="../style/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cause:wght@100..900&family=Intel+One+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>

<h2></h2>
<h2 class="text-center border border-white-2 mx-2 rounded-pill" style="padding: 20px; border-radius: 10px;">Ajouter un utilisateur</h2>

<br><br>

<form method="POST" class="row justify-content-center align-items-center g-2 col-6 mx-auto border border-white rounded-5 bg-transparent"
    style="padding: 20px;">

    <label class="form-label">Nom</label><br>
    <input type="text" name="nom" class="form-control" required><br><br>

    <label class="form-label">Mot de passe</label><br>
    <input type="password" name="mot_de_passe" class="form-control" required><br><br>

    <label class="form-label">Adresse</label><br><br>
    <input type="text" name="adresse" class="form-control" required><br><br>

    <label class="form-label">Numero de téléphone</label><br><br>
    <input type="text" name="numero" class="form-control" required><br><br>

    <label class="form-label">Rôle</label><br>
    <select name="role" class="form-control" required>
        <option value="gerant">Gérant</option>
        <option value="receptionniste">Réceptionniste</option>
        <option value="livreur">Livreur</option>
    </select><br><br>

    <button type="submit" name="ajouter" class="btn btn-outline-light btn-center border-white text-dark">
        Ajouter
    </button>

    <button class="btn btn-outline-light btn-center border-white "><a href="login.php" style="text-decoration: none; color: white;" class="text-dark">
        Retour
    </a></button>

    <script>
        setTimeout(function() {
            let notif = document.getElementById("notification");

            if(notif)
            {
                notif.classList.remove("show");
            }
        }, 3000);
    </script>

</form>

<p><?php echo $message; ?></p>

</body>
</html>