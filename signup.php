<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fjell Bedriftsløsninger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="mt-4 bg-dark">

    <section class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-9">
                <div class="card text-bg-dark" style="box-shadow: 0 0 3rem white;">
                    <div class="card-body">
                        <form method="post" action="php_requires/res_h.php">
                            <h2>Lag bruker</h2>
                            <div class="mb-3">
                                <label for="navn" class="form-label"> Navn </label>
                                <input class="form-control" type="text" name="navn" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label"> Brukernavn </label>
                                <input class="form-control" type="text" name="username" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="passord" class="form-label"> Passord </label>
                                <input class="form-control" type="password" name="passord" placeholder="">
                            </div>
  
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                            <input class="btn btn-primary btn-block" type="submit" name="submitSignUp" value="Create user">
                            <a href="index.php" class="btn btn-link"> Logg inn her</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>