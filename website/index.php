<?php

include("include/connect.php");


$login = False;
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $login = True;
    }
}

if (!$login) {
    header("Location: index.php?error=1");
    exit();
}

?>


<!DOCTYPE HTML>

<head>
    <title>
        Canvas test        
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel ="icon" href="images/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <canvas id="canvas" width="1000" height="600">

        </canvas>
    </main>
    <p id="pOutput"></p>

    <script src="scripts/basicFunctions.js"></script>

    <script src="scripts/classes/tiles.js"></script>
    <script src="scripts/classes/chunktypes.js"></script>
    <script src="scripts/classes/structures.js"></script>
    <script src="scripts/classes/entities.js"></script>
    <script src="scripts/classes/particles.js"></script>
    <script src="scripts/classes/projectiles.js"></script>
    <script src="scripts/classes/inventory.js"></script>

    <script src="script.js"></script>
</body>

<?php
// Close connection 
mysqli_close($conn); 
?>