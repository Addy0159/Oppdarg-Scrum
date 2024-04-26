<?php
session_start();

if (!isset($_SESSION["login"]) && $_SESSION["login"] != true){
    //header( "refresh:0; url=login.php" );
    echo '<script> alert("You need to be logged in to acsess this");</script>';
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Oppdater </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="Medium/Bilder/Mainicon.ico">
</head>

<body class=" bg-dark">
    <section class="container my-5">
        <div class="row d-flex justify-content-center g-4">
            <div class="col-6 ol-lg-8 col-xl-10 text-white p-3 rounded" style="box-shadow: 0 0 3rem white;">
                <form method="post" action="php_requires/settings_h.php">
                    <h2> Oppdater konto</h2>
                    <div class="mb-2">
                        <label for="new_username" class="form-label"> Navn: </label>
                        <input class="form-control" type="text" name="new_navn" value='<?php echo $_SESSION['Navn']; ?>'>
                    </div>
                    <div class="mb-2">
                        <label for="new_username" class="form-label"> Brukernavn </label>
                        <input class="form-control" type="text" name="new_username" value='<?php echo $_SESSION['brukernavn']; ?>'>
                    </div>
                    <div class="mb-2">
                        <label for="new_password" class="form-label"> Passord </label>
                        <input class="form-control" type="password" name="new_password" placeholder='idk'>
                    </div>
                    <div class="mb-2">
                        <label for="confirm_password" class="form-label"> Gjenta passord </label>
                        <input class="form-control" type="password" name="confirm_password" placeholder='idk'>
                    </div>
                    <div>
                        <input class="btn btn-primary btn-block" type="submit" name="submitSignUp" value="Oppdater">
                    </div>
                </form>
            </div>
        </div>
    </section>


    
    <!-- Bootstrap 5.3 komponent:-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Used for Popper effect: If you don’t plan to use dropdowns, popovers, or tooltips, save some kilobytes by not including Popper. -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>