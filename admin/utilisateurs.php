<?php

$conn = mysqli_connect("localhost", "root", "", "restaurant");

$message = "";

if(isset($_POST['ajouter']))
{
    $nom = trim($_POST['nom']);
    $mot_de_passe = trim($_POST['mot_de_passe']);
    $role = $_POST['role'];

    $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilisateurs(nom, mot_de_passe, role)
            VALUES('$nom', '$mot_de_passe_hache', '$role')";

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
    <title>Ajouter un utilisateur</title>
</head>
<body>

<h2>Ajouter un utilisateur</h2>

<form method="POST">

    <label>Nom</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Mot de passe</label><br>
    <input type="password" name="mot_de_passe" required><br><br>

    <label>Rôle</label><br>
    <select name="role" required>
        <option value="gerant">Gérant</option>
        <option value="receptionniste">Réceptionniste</option>
        <option value="livreur">Livreur</option>
    </select><br><br>

    <button type="submit" name="ajouter">
        Ajouter
    </button>

</form>

<p><?php echo $message; ?></p>

</body>
</html>