<html>

<body>
    <?php
    echo "<br>************* (1) ***********<br>";
    echo nl2br( "new\n line");
    echo "<br>************* (2) ***********<br>";
    $lenghth = strlen("alieldin");
    echo "first function length = ";
    echo $lenghth;
    echo "<br>";
    echo "second function eords count = ";
    echo str_word_count("CMS Tack hello world!");
    echo "<br>";
    echo "third function  position of world = ";
    echo strpos("Hello Cms track world!", "world");
    echo "<br>";

    echo "<br>************* (3) ***********<br>";

    foreach($_SERVER as $serv){
        echo nl2br($serv."\n");
    }

    echo "<br>************* (4) ***********<br>";

    $array1 = [12, 45, 10, 25];
    $sum = 0;
    for ($i = 0; $i < count($array1); $i++) {
        $sum += $array1[$i];
    }
    echo "sum is $sum" . "<br/>";
    echo "avg is " . ($sum / count($array1)) . "<br/>";

    for ($i = 0; $i < count($array1); $i++) {
        for ($j = 0; $j < count($array1); $j++) {
            if ($array1[$i] > $array1[$j]) {
                $temp = $array1[$i];
                $array1[$i] = $array1[$j];
                $array1[$j] = $temp;
            }
        }
    }
    echo "<br>*************Num arry***********<br>";

    print_r($array1);
    echo "<br>*************************** <br>";
    $array2 = array("Sara" => "31", "John" => "41", "Walaa" => "39", "Ramy" => "40");
    echo "<br>*************assending vale***********<br>";
    
    asort($array2);
    foreach ($array2 as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "<br>*************dessending value***********<br>";

    arsort($array2);
    foreach ($array2 as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "<br>*************assending key***********<br>";

    ksort($array2);
    foreach ($array2 as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "<br>*************dessending key***********<br>";
    krsort($array2);
    foreach ($array2 as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    ?>
</body>

</html>