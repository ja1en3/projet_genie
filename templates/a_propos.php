<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>JFB</title>
    <link rel="stylesheet" href="../style/a_propos.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cause:wght@100..900&family=Intel+One+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid header-border">
        <div class="row">
            <div class="col-4 justify-content-center d-flex align-items-center">
                <p class="m-0"><img class="imag-fluide rounded-6" src="../src/logo.jpg" alt="Logo" width="200" height="250" id="D1"></p>
            </div>

            <div class="col-8 row justify-content-center d-flex align-items-center">
                <nav class="nav rounded-pill px-3 py-2" id="nav_bar">

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/index.php">ACCUEIL</a>

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/commande.php">COMMANDE</a>

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/menu.php">MENU</a>

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/a_propos.php">A PROPOS</a>

                </nav>
            </div>
        </div>

        <div class="container-mb-6 row">

        </div>




    </div>
    

        <br> <br> <br> <br> <br> <br> 

    <section class="banner-section">
        <div class="carousel-inner">
            <div class="slide">
                <div class="imag-fluide">
                    <img src="../src/environnement.jpg" alt="environnement">
                </div>
            </div>
            <div class="slide">
                <div class="imag-fluide">
                    <img src="../src/hamburgur.jpg" alt="hamburgur">
                </div>
            </div>
            <div class="slide">
                <div class="imag-fluide">
                    <img src="../src/buffet.jpg" alt="buffet">
                </div>
            </div>
        </div>
    </section>

        <section class="container">
            <div class="image-part">
                <img src="../src/serveuse1.jpg" alt="Service">
            </div>
            <br> <br> <br> <br> <br> <br>
            <div class="text-part">
                <h2>Présentation du restaurant</h2>
                <p><strong>Juice & Food Bar</strong> est une véritable invitation au voyage culinaire, où la richesse des traditions congolaises rencontre la diversité des saveurs internationales. Dans un cadre chaleureux et convivial, nous mettons à l'honneur les incontournables de notre terroir, comme le somptueux pondu, le poisson braisé aux épices locales ou encore le chikwangue fondant, préparés avec des ingrédients frais pour restituer l'authenticité de nos racines.</p>
                
                <p>Cette base ancrée dans la culture culinaire de la RDC est sublimée par une sélection gourmande de plats d'ailleurs, conçue pour satisfaire toutes les curiosités. Que vous soyez en quête du goût réconfortant du pays ou d’une découverte gastronomique étrangère, notre établissement promet une expérience savoureuse qui unit les cultures dans une même assiette.</p>
                
                <p>Que vous veniez pour un déjeuner d'affaires rapide, un dîner romantique ou une célébration entre amis, notre équipe dévouée met tout en œuvre pour vous offrir un service attentionné et une ambiance mémorable. Plus qu’un simple lieu de restauration, notre établissement se veut un espace de partage où chaque convive, habitué ou visiteur de passage, se sent comme chez soi. Nous sommes impatients de vous accueillir pour partager avec vous notre passion du goût et faire de votre passage à notre table un moment d'exception.</p>
            </div>
        </section>

    <section class="py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-50 p-4" id="L1">
                        <h4 class="text-sky">Frais</h4>
                        <br>
                        <p>Aussi pur qu'une rosée du matin, pressé à la minute.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-50 p-4">
                        <h4 class="text-sky">Sain</h4>
                        <br>
                        <p>Une légèreté qui vous accompagne tout au long de la journée.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-50 p-4" id="L1">
                        <h4 class="text-sky">Vrai</h4>
                        <br>
                        <p>Une transparence totale, de la source jusqu'à votre verre.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header>
            <div class="header-top">
                
                <div class="search-bar" id="A1">Rechercher...</div>
                <div class="social-links" id="A2">
                    <a href="#" class="btn-social">Facebook</a>
                    <a href="#" class="btn-social">Instagram</a>
                    
                </div>
            </div>
    </header>


        <footer>
            <div class="footer-container">
                <div class="footer-col">
                    <h4>Nos Catégories</h4>
                    <ul></ul>
                </div>

                <div class="footer-col">
                    <h4>Nos suggestions</h4>
                <ul></ul>
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
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>