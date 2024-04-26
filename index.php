<?php
session_start();
    if (isset($_SESSION["login"])){
        header( "refresh:0; url=oversiktSide.php" );
        echo '<script> alert("Du er logget inn, log ut i kontoer managment siden");</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolfenstein LAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <section class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-7">
                <div class="card text-bg-dark" style="box-shadow: 0 0 3rem white;">
                    <form method="POST" action="php_requires/login_h.php">
                        <img src="Wolfenstein_Enemy_Territory_logo.png" class="card-img-top" alt="Fjell bilde" />
                        <div class="card-body">
                            <h2 class="card-title"> Wolfenstein LAN </h2>
                            <p> For å melde deg inn må du logge inn: </p>
                                <div class="row gap-1">
                                    <div class="col">
                                        <label for="floatingInput" class="m-1">Brukernavn</label>
                                        <input type="text" name="brukernavn" class="form-control" id="floatingInput" placeholder="">
                                    </div>
                                    <div class="col">
                                        <label for="floatingPassword" class="m-1">Password</label>
                                        <input type="password" name="passord" class="form-control" id="floatingPassword" placeholder="">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between py-2">
                            <a href="signup.php" class="btn btn-link ps-0"> Har du ikke bruker? Klikk her</a>
                            <input type="submit" name="submitLogin" class="btn btn-primary" value="Logg inn">
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>