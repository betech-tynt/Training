<?php 
    $age = array("Snake"=>22 ,"Ben"=>25 ,"Lisa"=>20);
    echo json_encode($age);

    echo "<br>";
    echo "<br>";

    $cars = ["BMW" ,"Toyota" ,"Honda"];
    echo json_encode($cars);

    echo "<br>";
    echo "<br>";

     $age1 = '{"Snake":22 ,"Ben":25 ,"Lisa":20}';
    var_dump(json_decode($age1));

    echo "<br>";
    echo "<br>";

    $age1 = '{"Snake":22 ,"Ben":25 ,"Lisa":20}';
    var_dump(json_decode($age1, true));

    echo "<br>";
    echo "<br>";

    $age2 = '{"Snake":22,"Ben":25,"Lisa":20}';
    $obj = json_decode($age2);
    foreach ($obj as $key => $value)
    {
        echo $key . ":" . $value . "<br>";
    }

    echo "<br>";

    foreach ($cars as $car)
    {
        echo $car . "<br>";
    }

    echo "<br>";
    $arr = json_decode($age1, true);
    foreach ($arr as $key => $value)
    {
        echo $key. " => ". $value. "<br>";
    }
?>