<?php
require "../connection/connection.php";
$conn = &connection();
$stmt = sqlsrv_query($conn, "SELECT * FROM News");

if ($stmt === false) {
    echo "Error in query preparation/execution.\n";
    die(print_r(sqlsrv_errors(), true));
}
?>

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
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="style_actualites.css">

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
                        <li><a href="#">Actualitès</a></li>
                        <li><a href="../Contact/contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="padding-block-900">
            <div class="container">
                <h1 class="page-header fs-primary-heading fw-bold">
                Actualitès
                </h1>
                <div class="even-colums d-block">
                    <?php while ($row = sqlsrv_fetch_array($stmt)) { ?>
                        <div class="row g-0 bg-body-secondary position-relative">
                            <div class="col-md-6 mb-md-0 p-md-4">
                                <img src="../../Panel/Panel/news/NewsImages/<?=$row['imageFileName'] ?>" class="w-100">
                            </div>
                            <div class="col-md-6 p-4 ps-md-0">
                                <h5 class="mt-0"><?= $row['articleTitle'] ?></h5>
                                <p class="text-truncate"><?= $row['articleContent'] ?></p>
                                <a href="#" class="stretched-link">Détails</a>
                            </div>
                        </div>
                    <?php
                    }
                    sqlsrv_close($conn);  ?>
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
            </div>
        </footer>
    </main>
</body>
<script type="text/javascript" src="main.js"></script>

</html>