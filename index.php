<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>JFB</title>
    <link rel="stylesheet" href="style/index.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cause:wght@100..900&family=Intel+One+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row center">
        <div class="col-justify-content-center d-flex align-items-center">
            <p class="m-0"><img class="imag-fluide rounded-6" id="logo" src="src/logo.jpg" alt="Logo" width="200" height="250"></p>
        </div>
        </div>
        <header class="">
            <h1>JFB</h1>
            <h1>
            <nav>
                <ul>
                    <li><a href="templates/acceuil.php">Passe votre commande</a></li>
                    <li><a href="admin/login.php">Administration</a></li>
                </ul>
            </nav>
            </h1>
        </header>
       <footer>
            <div class="footer-container">
                <div class="footer-col">
                    <h4>Nos Catégories</h4>
                    <ul></ul>
                </div>

                <div class="footer-col">
                    <h4>Nos suggestions</h4>
                        <ul>Nos meilleures ventes sont:
                            <li>Le Burger<li>
                            <li>Le Mikate</li>
                            <li>Le Ntaba</li>
                            <li>La Pizza</li>
                        </ul>
                </div>

                <div class="footer-col">
                    <h4>Horaire</h4>
                    <p style="font-size: 14px; color: #666;">Ouvert du Lundi au Vendredi de 9h30 à 21h</p>
                    <p style="font-size: 14px; color: #666;">Ouvert le Samedi et Dimanche de 12h à 23h</p>
                </div>
                </div>
                <div class="footer-bottom">
                    &copy; 2026 Juice & Food Bar. Tous droits réservés.
                </div>
        </footer>
</body>
</html>