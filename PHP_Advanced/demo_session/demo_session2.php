<?php 
    // Start the session
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php 
        // Set session variables
        echo "color is" . $_SESSION["Snake"] . "<br>";
        echo "Anamal" . $_SESSION["Monster"] . "<br>";

    ?>
</body>
</html>