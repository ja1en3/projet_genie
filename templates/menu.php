<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>JFB</title>
    <link rel="stylesheet" href="../style/menu.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cause:wght@100..900&family=Intel+One+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<script>
function filtrer(categorie){
    const items = document.querySelectorAll('.menu-item');
    items.forEach(item => {
        if(categorie === 'all' || item.classList.contains(categorie)){
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>

<body>
   <div class="container-fluid-mb-0 header-border">
        <div class="row">

            <div class="col-4 justify-content-center d-flex align-items-center">
                <p class="m-0"><img class="imag-fluide rounded-6" id="logo" src="../src/logo.jpg" alt="Logo" width="200" height="250"></p>
            </div>

            <div class="col-8 row justify-content-center d-flex align-items-center">

                <nav class="nav rounded-pill px-3 py-2" id="nav_bar">

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/acceuil.php">ACCUEIL</a>

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/commande.php">COMMANDE</a>

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/menu.php">MENU</a>

                    <a class="nav-link text-white border border-light mx-2 rounded-pill" href="../templates/a_propos.php">A PROPOS</a>

                </nav>

            </div>
        </div>


            <!-- Infos resto -->

        <div class="container-fluid ">
            <div class="text-secondary-emphasis text-center">

                <!-- <div class="row">
                    <div class="col-6 d-flex align-items-center justify-content-center">
                        <img class="imag-fluide rounded-6" src="../src/pizza.png" alt="Pizza" width="400" height="400">
                    </div>
                </div> -->

                <p> <br> <br> <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis excepturi nam voluptas? Ipsa, 
                    cumque? Ipsa optio sequi molestiae exercitationem architecto eaque debitis beatae ipsum officiis culpa? Nihil ipsa officia architecto?  
                <br> <br> <br></p>            
            </div>

            <!-- Carte des plats -->


        <!-- MENU -->
<!-- <ul class="nav nav-pills justify-content-center mb-4">

    <li class="nav-item">
        <button class="nav-link active"
                data-bs-toggle="pill"
                data-bs-target="#all">
            Tous
        </button>
    </li>

    <li class="nav-item">
        <button class="nav-link"
                data-bs-toggle="pill"
                data-bs-target="#legume">
            Légumes
        </button>
    </li>

    <li class="nav-item">
        <button class="nav-link"
                data-bs-toggle="pill"
                data-bs-target="#viande-poisson">
            Viande et Poisson
        </button>
    </li>

    <li class="nav-item">
        <button class="nav-link"
                data-bs-toggle="pill"
                data-bs-target="#fastfood">
            FastFood
        </button>
    </li>

</ul> -->

    <div class="text-center mb-4">

        <button class="btn btn-filtre btn-primary mx-2 rounded-pill" onclick="filtrer('all')">Tous</button>

        <button class="btn btn-filtre btn-primary mx-2 rounded-pill" onclick="filtrer('legume')">Légumes</button>

        <button class="btn btn-filtre btn-primary mx-2 rounded-pill" onclick="filtrer('viande-poisson')">Viande et Poisson</button>

        <button class="btn btn-filtre btn-primary mx-2 rounded-pill" onclick="filtrer('fastfood')">FastFood</button>

        <button class="btn btn-filtre btn-primary mx-2 rounded-pill" onclick="filtrer('special')">Spécialités</button>

    </div>


 
            <div class="container tab-content">

                <!--Tous Les plats-->
                <div class="row g-4" id="all">
                    <!-- Legumes -->
                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item legume">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/chenille.jpg" class="card-img-top rounded-top-5" alt="chenille">
                            <div class="card-body">
                                <h5 class="card-title">Chenille</h5>
                                <a href="#" class="btn btn-primary">
                                     <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Délicieuse chenille préparée selon la tradition congolaise, riche en protéines et accompagnée d'un assaisonnement soigneusement sélectionné.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item legume">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/fumbwa.jpg" class="card-img-top rounded-top-5" alt="fumbwa">
                            <div class="card-body">
                                <h5 class="card-title">Fumbwa</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Fumbwa riche en saveur, préparé avec des feuilles locales et une sauce onctueuse.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item legume">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/pondu.jpg" class="card-img-top rounded-top-5" alt="pondu">
                            <div class="card-body">
                                <h5 class="card-title">Pondu</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Pondu traditionnel cuit longuement pour révéler tous ses arômes.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item legume">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/banane.webp" class="card-img-top rounded-top-5" alt="banane">
                            <div class="card-body">
                                <h5 class="card-title">Banane</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                    <summary>Description</summary>
                                    <p>Banane plantain grillée pour une texture fondante et un goût sucré-salé.</p>
                                </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item legume">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/salade.webp" class="card-img-top rounded-top-5" alt="salade">
                            <div class="card-body">
                                <h5 class="card-title">Salade</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Salade fraîche avec une vinaigrette légère et des légumes croquants.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item legume">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/harico.jpg" class="card-img-top rounded-top-5" alt="harico">
                            <div class="card-body">
                                <h5 class="card-title">Harico</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Harico tendre, mijoté avec des épices et servi chaud.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Viande et Poisson -->
                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item viande-poisson">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/ntamba.jpeg" class="card-img-top rounded-top-5" alt="ntamba">
                            <div class="card-body">
                                <h5 class="card-title">Ntamba</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Ntamba savoureuse, cuite avec des herbes fraîches et des épices locales.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item viande-poisson">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/poulet_mayo.jpg" class="card-img-top rounded-top-5" alt="poulet_mayo">
                            <div class="card-body">
                                <h5 class="card-title">Poulet-Mayo</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Poulet mayonnaise onctueux, servi avec une sauce maison.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item viande-poisson">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/cuisse_de_poulet.jpg" class="card-img-top rounded-top-5" alt="cuisse_de_poulet">
                            <div class="card-body">
                                <h5 class="card-title">Cuisse de Poulet</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Cuisse de poulet grillée, croustillante à l'extérieur et juteuse à l'intérieur.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item viande-poisson">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/poisson.webp" class="card-img-top rounded-top-5" alt="poisson">
                            <div class="card-body">
                                <h5 class="card-title">Poisson</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Poisson délicatement assaisonné, cuit pour garder sa texture légère.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- FastFood -->
                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item fastfood">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/saussice.webp" class="card-img-top rounded-top-5" alt="saussice">
                            <div class="card-body">
                                <h5 class="card-title">Saussice</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Saucisse grillée, bien épicée et parfaite en accompagnement ou en snack.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item fastfood">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/burger.jpg" class="card-img-top rounded-top-5" alt="burger">
                            <div class="card-body">
                                <h5 class="card-title">Burger</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Burger juteux avec fromage fondant, légumes frais et sauce gourmande.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item fastfood">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/frite.jpg" class="card-img-top rounded-top-5" alt="frite">
                            <div class="card-body">
                                <h5 class="card-title">Frite</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Frites dorées et croustillantes, préparées à partir de pommes de terre fraîches.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item fastfood">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/patte.jpg" class="card-img-top rounded-top-5" alt="patte">
                            <div class="card-body">
                                <h5 class="card-title">Patte</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Patte savoureuse cuite avec des épices et servie chaude.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item fastfood">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/pizza.webp" class="card-img-top rounded-top-5" alt="pizza">
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Pizza généreuse garnie de fromage fondant et d’ingrédients savoureux.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item fastfood">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/shawarma.avif" class="card-img-top rounded-top-5" alt="shawarma">
                            <div class="card-body">
                                <h5 class="card-title">Shawarma</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Shawarma tendre et parfumée, servie avec une sauce maison.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 menu-item fastfood">
                        <div class="card border border-dark rounded-5">
                            <img src="../src/kwanga.jpg" class="card-img-top rounded-top-5" alt="kwanga">
                            <div class="card-body">
                                <h5 class="card-title">Kwanga</h5>
                                <a href="#" class="btn btn-primary">
                                    <details class="menu-details">
                                        <summary>Description</summary>
                                        <p>Kwanga traditionnel, doré à souhait et parfait en accompagnement.</p>
                                    </details>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                    <br> <br> <br> <br> <br> <br>
          

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

</div>



    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>