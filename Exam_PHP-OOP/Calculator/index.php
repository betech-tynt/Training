<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<?php


    require_once("../classes/Calculator.php");


    $calc = new Calculator();

    $first = "";
    $second = "";

    //call makeAdd() function  
    if (isset($_POST["Add"])) {
        $first = $_POST["first"];
        $second = $_POST["second"];

        echo $calc->makeAdd($_POST["first"], $_POST["second"]);
    }

    //call makeMinus() function  
    if (isset($_POST["Minus"])) {
        $first = $_POST["first"];
        $second = $_POST["second"];

        echo $calc->makeMinus($_POST["first"], $_POST["second"]);
    }

    //call makeMultiply() function  
    if (isset($_POST["Multiply"])) {
        $first = $_POST["first"];
        $second = $_POST["second"];

        echo $calc->makeMultiply($_POST["first"], $_POST["second"]);
    }

    //call makeDivide() function  
    if (isset($_POST["Divide"])) {
        $first = $_POST["first"];
        $second = $_POST["second"];

        echo $calc->makeDivide($_POST["first"], $_POST["second"]);
    }

?>

<body>
    <form action="index.php" method="post">
        Số đầu tiên: <input type="number" name="first" value="<?php echo $first ?>"><br><br>
        Số thứ hai: <input type="number" name="second" value="<?php echo $second ?>"><br><br>
        <input type="submit" name="Add" value="Cộng">
        <input type="submit" name="Minus" value="Trừ">
        <input type="submit" name="Multiply" value="Nhân">
        <input type="submit" name="Divide" value="Chia">
    </form>
</body>

</html>