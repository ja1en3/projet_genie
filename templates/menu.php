<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>JFB</title>
    <link rel="stylesheet" href="../style/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cause:wght@100..900&family=Intel+One+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="container-fluid-mb-0 header-border">
        <div class="row">

            <div class="col-4 justify-content-center d-flex align-items-center">
                <p class="m-0"><img class="imag-fluide rounded-6" id="logo" src="../src/logo.jpg" alt="Logo" width="200" height="250"></p>
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
    <ul class="nav nav-pills justify-content-center mb-4">

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
                    data-bs-target="#poulet">
                Poulet
            </button>
        </li>

        <li class="nav-item">
            <button class="nav-link"
                    data-bs-toggle="pill"
                    data-bs-target="#fastfood">
                FastFood
            </button>
        </li>

    </ul>


  <!--      CONTENU

             TOUS
            <section class="tab-pane fade show active" id="all">

                <div class="row g-4">

                    <div class="col-md-4 card-body">
                        <div class="food-card">
                            <img src="../src/buffet.jpg">
                            <h4 class="mt-3 card-title  btn btn-outline-warning">Salade</h4>
                            <p class="card-text"></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="food-card">
                            <img src="../src/poulet_mayo.jpg">
                            <h4 class="mt-3">Poulet braisé</h4>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="food-card">
                            <img src="burger.jpg">
                            <h4 class="mt-3">Burger</h4>
                        </div>
                    </div>

                </div>
                <br> <br><br> <br>

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="food-card">
                            <img src="salade.jpg">
                            <h4 class="mt-3">Salade</h4>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="food-card">
                            <img src="poulet.jpg">
                            <h4 class="mt-3">Poulet braisé</h4>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="food-card">
                            <img src="burger.jpg">
                            <h4 class="mt-3">Burger</h4>
                        </div>
                    </div>

                </div>

            </section>


             LEGUMES 
            <section class="tab-pane fade" id="legume">

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="food-card">
                            <img src="salade.jpg">
                            <h4 class="mt-3">Salade</h4>
                        </div>
                    </div>

                </div>

            </section>


            POULET 
            <section class="tab-pane fade" id="poulet">

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="food-card">
                            <img src="../src/poulet_mayo.jpg">
                            <h4 class="mt-3">Poulet braisé</h4>
                        </div>
                    </div>

                </div>

            </section>


            FASTFOOD 
            <section class="tab-pane fade" id="fastfood">

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="food-card">
                            <img src="burger.jpg">
                            <h4 class="mt-3">Burger</h4>
                        </div>
                    </div>

                </div>

            </section>

        </div>

    <style>
        .food-card{
                background: white;
                border-radius: 20px;
                padding: 15px;
                text-align: center;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }

            .food-card img{
                width: 100%;
                height: 180px;
                object-fit: cover;
                border-radius: 15px;
            }

    </style> -->

            
            <div class="container">
                

                    <section class="row g-4"  id="all">
                     <!--   <h1 class="text-center text-secondary-emphasis">Notre Menu Congolaise</h1><br> <br> <br> <br> <br> <br> -->
                        <div id="legume" class="row g-4">

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/chenielle.jpg" class="card-img-top rounded-top-5" alt="chenielle">
                                    <div class="card-body">
                                        <h5 class="card-title">Chenille</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/fumbwa.jpg" class="card-img-top rounded-top-5" alt="fumbwa">
                                    <div class="card-body">
                                        <h5 class="card-title">Fumbwa</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/pondu.jpg" class="card-img-top rounded-top-5" alt="pondu">
                                    <div class="card-body">
                                        <h5 class="card-title">Pondu</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/banane.webp" class="card-img-top rounded-top-5" alt="banane">
                                <div class="card-body">
                                    <h5 class="card-title">Banane</h5>
                                    <p class="card-text">Some quick example text.</p>
                                    <a href="#" class="btn btn-primary">Commander</a>
                                </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/salade.webp" class="card-img-top rounded-top-5" alt="salade">
                                    <div class="card-body">
                                        <h5 class="card-title">Salade</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/harico.jpg" class="card-img-top rounded-top-5" alt="harico">
                                    <div class="card-body">
                                        <h5 class="card-title">Harico</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--POULET-->

                        <div id="poulet et viande" class="row g-4">

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/ntamba.jpeg" class="card-img-top rounded-top-5" alt="ntamba">
                                    <div class="card-body">
                                        <h5 class="card-title">Ntamba</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/poulet_mayo.jpg" class="card-img-top rounded-top-5" alt="poulet_mayo">
                                    <div class="card-body">
                                        <h5 class="card-title">Poulet-Mayo</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                            

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/kwanga.jpg" class="card-img-top rounded-top-5" alt="kwanga">
                                    <div class="card-body">
                                        <h5 class="card-title">Kwanga</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>


                            

                            

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/poisson.webp" class="card-img-top rounded-top-5" alt="poisson">
                                    <div class="card-body">
                                        <h5 class="card-title">Poisson</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>
                        <!--   <h1 class="text-center text-secondary-emphasis">Notre Menu International</h1>  <br> <br> <br> <br> <br> <br>  -->

                            

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/burger.jpg" class="card-img-top rounded-top-5" alt="burger">
                                    <div class="card-body">
                                        <h5 class="card-title">Burger</h5>
                                        <p class="card-text">Some quick example text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/cuisse_de_poulet.jpg" class="card-img-top rounded-top-5" alt="cuisse_de_poulet">
                                    <div class="card-body">
                                        <h5 class="card-title">Cuisse de Poulet</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/frite.jpg" class="card-img-top rounded-top-5" alt="frite">
                                    <div class="card-body">
                                        <h5 class="card-title">Frite</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div> 

                            

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/patte.jpg" class="card-img-top rounded-top-5" alt="patte">
                                    <div class="card-body">
                                        <h5 class="card-title">Patte</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/pizza.webp" class="card-img-top rounded-top-5" alt="pizza">
                                    <div class="card-body">
                                        <h5 class="card-title">Pizza</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div> 

                            

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/saussice.webp" class="card-img-top rounded-top-5" alt="saussice">
                                    <div class="card-body">
                                        <h5 class="card-title">Saussice</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card border border-dark rounded-5">
                                    <img src="../src/shawarma.avif" class="card-img-top rounded-top-5" alt="shawarma">
                                    <div class="card-body">
                                        <h5 class="card-title">Shawarma</h5>
                                        <p class="card-text">text.</p>
                                        <a href="#" class="btn btn-primary">Commander</a>
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