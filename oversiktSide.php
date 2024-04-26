<?php
session_start();
if (!isset($_SESSION["Admin"]) && $_SESSION["Admin"] != true) {
    header("refresh:0; url=index.php");
    echo '<script> alert("You need to be logged in to acsess this");</script>';
}
$text_color = 'text-danger';
if ($_SESSION['Admin'] == 1){
    $text_color = 'text-success';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fjell Bedriftsløsninger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
    .Onhover {}
    .Onhover:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body class="bg-dark">
    <section class="container my-5">
        <div class="container text-center display-5 mb-5 text-white" style="border-bottom:3px solid white;">
            Her kan du melde deg inn i en LAN-party
        </div>
        <div class="row d-flex justify-content-center g-4">
            <!-- Universell card hendvisning -->
            <div class="col-8 col-lg-6">
                <div class="card text-bg-dark" style="box-shadow: 0 0 2rem white;">
                    <img src="Wolfenstein_Enemy_Territory_logo.png" class="card-img-top" alt="Fjell bilde" />
                    <div class="card-body">
                        <h4> Meld deg inn</h4>
                        <p class="card-text">
                            See ulike lokale LAN partier eller etc og meld deg her.
                        </p>
                        <div>
                            <a href="arrangermneter.php" type="button" class="icon-link icon-link-hover text-decoration-none">Send her
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kunde: Se hendvisninger -->
            <div class="col-8 col-lg-6">
                <div class="row gap-5">
                    <div class="col-12">
                        <div class="card text-bg-dark" style="box-shadow: 0 0 2rem white;">
                            <div class="card-body">
                                <h4> Konto management</h4>
                                <p class="card-text">
                                    Velkommen,
                                    <?php print '<span class="' . $text_color . 'Onhover">' . $_SESSION['Navn'] .'</span>'; ?>
                                </p>
                                <div>
                                    <a href="php_requires/logout_h.php" type="button" class="icon-link icon-link-hover text-decoration-none" style="--bs-icon-link-transform: translate3d(0, -.250em, 0);"><i class="bi bi-lock-fill"></i>Logg ut </a>
                                    <a href="userSettings.php" type="button" class="icon-link icon-link-hover text-decoration-none" style="--bs-icon-link-transform: translate3d(0, -.250rem, 0);"><i class="bi bi-person-fill"></i> Endre brukernavn og passord </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card text-bg-dark" style="box-shadow: 0 0 2rem white;">
                            <div class="card-body">
                                <h4> Arranagmenter du er med:</h4>
                                <p class="card-text">
                                    See arrangmenter du er med her. 
                                <div>
                                    <!-- Status? -->
                                </div>
                                </p>
                                <div>
                                    <?php 
                                        print '<a href="problemHandler.php" type="button" class="icon-link icon-link-hover text-decoration-none">See her <i class="bi bi-arrow-right"></i></a>';
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>