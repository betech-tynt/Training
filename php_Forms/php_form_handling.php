<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php 
        $name = "" ;
        $email = "" ;

        if (isset($_POST["submit"]))
        {
            $name = $_POST["name"];
            $email = $_POST["email"];
        }
    ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name" value="<?php echo $name?>"><br>
        Email: <input type="text" name="email" value="<?php echo $email?>"><br>
        Image: <input type="file" name="fileToUpload" id="fileToUpload"> <br>
       
        <br> <input type="submit" name="submit">
    </form>

    

    <br>
    <?php
    

        $d = mktime(12, 01, 25, 11, 9, 2023);
        echo "Create date is ". date("Y-m-d h:i:sa", $d);
    ?>

    <?php include "./footer.php"; ?>
    
</body>
</html>