<?php
    function demo($str)
    {
        return $str . "!!";
    }
    function ask($str)
    {
        return $str . "???";
    }

    function printformatted($str, $format)
    {
        echo $format($str);
    }

    printformatted("monsters", "demo");
    echo "<br>";
    printformatted("Snake","ask");
?>