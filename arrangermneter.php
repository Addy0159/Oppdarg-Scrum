<?php
// Start the session (if not already started)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["Admin"]) && $_SESSION["Admin"] != true) {
    header("refresh:0; url=index.php");
    echo '<script> alert("You need to be logged in to acsess this");</script>';
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get and validate data
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $problem = validate($_POST['problem']);
    $problem_kategori = validate($_POST['problem_kategori']);
    $problem_text = validate($_POST['problem_text']);
    $id = $_SESSION['id'];


    if(empty($problem) || empty($problem_kategori) || empty($problem_text)) {
        header( "refresh:0; url=problem.php" );
        echo '<script> alert("Something is missing");</script>';
        die("");
    }
    
    try {
        require_once 'php_requires/db_connection.php';
        $query = "INSERT INTO problem (forfatter_id, kategori_id_kategori, problem_title, problem_text) values (:forfatter_id, :kategori_id_kategori, :problem_title, :problem_text);";
        $stmt = $pdo -> prepare($query);
        $stmt -> bindParam(':forfatter_id', $_SESSION['id']);
        $stmt -> bindParam(':kategori_id_kategori', $problem_kategori);
        $stmt -> bindParam(':problem_title', $problem);
        $stmt -> bindParam(':problem_text', $problem_text);
        $stmt -> execute();

        // Closing the connection
        $pdo = null;
        $stmt = null;        
        header( "refresh:0; url=main.php" );
        echo '<script> alert("Problem sendt!");</script>';
        die("");
            
        } catch (PDOException $e) {
            die("Failed " . $e->getMessage()); // die(); terminater scriptet og printer ut inni ()
        }
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fjell Bedriftsløsninger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section class="container my-5">
        <div class="row d-flex justify-content-center">
            <?php
                require_once 'php_requires/db_connection.php';
                $query = "SELECT * FROM arrangement";
                $stmt = $pdo -> prepare($query);
                $stmt -> execute();
                $arrangments_array = $stmt ->fetchAll(PDO::FETCH_ASSOC);

                foreach ($arrangments_array as $row){
                    $tittel = $row['Tittel'];
                    $Spill = $row['Spill'];
                    $beskrivelse = $row['beskrivelse'];?>

                <div class="card text-bg-dark">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <p> WHATT WWHAT WHAT WHATTTTTTT </p>
                    </div>
                </div>


                <?php }
            ?>
  
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>