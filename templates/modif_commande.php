<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>JFB</title>
    <link rel="stylesheet" href="../style/passe_commande.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cause:wght@100..900&family=Intel+One+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
</head>
<body>
     <div class="container-fluid-mb-0 header-border">
        <div class="row">

            <div class="col-3 d-flex align-items-center">
                <p class="m-0"><img class="imag-fluide rounded-6" id="logo" src="../src/logo.png" alt="Logo" width="200" height="250"></p>
            </div>

            <div class="col-6 row justify-content-center d-flex align-items-center">

                <nav class="nav rounded-pill px-3 py-2" id="nav_bar">

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/index.php">ACCUEIL</a>

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/commande.php">COMMANDE</a>

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/menu.php">MENU</a>

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/a_propos.php">A PROPOS</a>

                </nav>
                
            </div>
        </div>

        <h1>Liste des commandes</h1>



        <div>

            <h3>{{ commande.nom }}</h3>

            <p>Email : {{ commande.email }}</p>

            <p>Téléphone : {{ commande.telephone }}</p>

            <p>Adresse : {{ commande.adresse }}</p>

            <p>Détails : {{ commande.details }}</p>

            <p>Statut : {{ commande.statut }}</p>

            <a href="/admin/{{ commande.id }}">Modifier statut</a>
            <hr>

        </div>

        <a href="../commande" class="btn btn-outline-primary">Retour à la page de commande</a>

  
        </div>



</body>
</html>