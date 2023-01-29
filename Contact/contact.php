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
                        <li><a href="../Location/location.php">Location</a></li>
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
        <section class="padding-block-700">
            <div class="container">
                <div class="even-colums">
                    <div>
                        <h1 class="fs-primary-heading fw-bold">
                            Contactez-nous
                        </h1>
                        <h2 class="fs-secondary-heading fw-bold">
                            Prenez contact avec l'équipe VOLTA ELECTROGENE.
                        </h2>
                        <div class="padding-block-700">
                            <svg class="d-inline" id="i-mail" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M2 26 L30 26 30 6 2 6 Z M2 6 L16 16 30 6" />
                            </svg>
                            <p class="d-inline">voltElectrogene@gmail.com</p>
                        </div>
                        <div>
                            <svg class="d-inline" id="i-telephone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M3 12 C3 5 10 5 16 5 22 5 29 5 29 12 29 20 22 11 22 11 L10 11 C10 11 3 20 3 12 Z M11 14 C11 14 6 19 6 28 L26 28 C26 19 21 14 21 14 L11 14 Z" />
                                <circle cx="16" cy="21" r="4" />
                            </svg>
                            <ul>
                                <li>
                                    <p class="d-inline">00212620395447</p>
                                </li>
                                <li>
                                    <p class="d-inline">00212625479821</p>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div>
                        <form class="row g-3" action="sendMessage.php" method="post">
                        <h2 class="fs-secondary-heading fw-bold">
                            Être rappelé par un expert
                        </h2>
                            <div class="mb-3">
                                <label class="form-label">Nom / Prénom *</label>
                                <input type="text" class="form-control" name="contactFullName" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Entreprise / Organisme</label>
                                <input type="text" class="form-control" name="organisationName" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Téléphone *</label>
                                <input type="text" class="form-control" name="phoneNumber"  >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresse email</label>
                                <input type="email" class="form-control" name="contactMail" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Objet de votre demande</label>
                                <textarea class="form-control" rows="3" name="contactObject"></textarea>
                            </div>
                            <div>
                            <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="bg-primary-700 padding-block-700 text-primary-300">
            <div class="container">
                <div class="even-colums">
                    <div>
                        <a class="logo" href="#"><img src="../images/logo.svg" alt="VOLTA ELECTROGENE" width=70em></a>
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
            </div>
        </footer>
    </main>
</body>
<script type="text/javascript" src="main.js"></script>

</html>