<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <header class="primary-header">
        <div class="container">
            <div class="nav-wrapper">
                <a class="logo" href="../home.html"><img src="../images/logo.svg" alt="VOLTA ELECTROGENE logo" width="70em"></a>
                <button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false">
                    <img class="icon-menu" src="../images/icon-menu.svg" alt="" aria-hidden="true">
                    <img class="icon-close" src="../images/icon-close.svg" alt="" aria-hidden="true">
                    <span class="visually-hidden">Menu</span>
                </button>
                <nav class="primary-navigation" id="primary-navigation">
                    <ul aria-label="primary" class="nav-list" role="list">
                        <li><a href="./location.php">Location</a></li>
                        <li><a href="../venteEtOccasion/venteEtOccasion.php">Ventes & Occasion</a></li>
                        <li><a href="../Service/service.php">Services</a></li>
                        <li><a href="../Actualites/actualites.php">Actualitès</a></li>
                        <li><a href="../Contact/contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="padding-block-900">
            <div class="container">
                <div class="even-colums">
                    <div>
                        <h1 class="fs-primary-heading fw-bold">
                            Location de production d'énergie temporaire
                        </h1>
                        <p>
                        VOLTA ELECTROGENE vous propose des solutions de production d’énergie temporaire adaptées à vos besoins. Notre équipe de techniciens qualifiés, sait intervenir dans l'urgence et vous assiste dans le choix d’une installation clé en main. Les experts de VOLTA ELECTROGENE vous accompagnent tout au long de vos projets grâce à une large gamme de services.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-block-900">
            <div class="container">
                <div class="row row-cols-3">
                    <div class="card me-auto" style="width: 18rem;">
                        <img src="../images/elec1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Location de groupes électrogènes</p>
                        </div>
                    </div>
                    <div class="card me-auto" style="width: 18rem;">
                        <img src="../images/elec2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Location de bancs de charge</p>
                    </div>
                    
                </div>
                <div class="card me-auto" style="width: 18rem;">
                        <img src="../images/elec3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Location de tours d'éclairage</p>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <footer class="bg-primary-700 padding-block-700 text-primary-300">
            <div class="container">
                <div class="even-colums">
                    <div>
                        <a class="logo" href="#"><img src="../images/logo.svg" alt="VOLTA ELECTROGENE" width="70em"></a>
                        <ul role="list" aria-label="Social links">
                            <li><a aria-label="facebook" href="#"></a></li>
                            <li><a aria-label="youtube" href="#"></a></li>
                            <li><a aria-label="twitter" href="#"></a></li>
                            <li><a aria-label="instagram" href="#"></a></li>
                        </ul>
                    </div>
                    <!-- In Progress -->
                <!-- <div>
                        <nav>
                            <ul role="list" aria-label="Footer">
                                <li><a href="">Location</a></li>
                                <li><a href="">Ventes & Occasion</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </nav>
                    </div> -->
                    <div>
                        <p>&copy; Copyright 2023</p>
                    </div>
            </div>
        </footer>
    </main>
</body>
<script type="text/javascript" src="main.js"></script>
</html>