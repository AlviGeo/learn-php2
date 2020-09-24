<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYY</title>
</head>

<body>
    <?php

    // INDEXED ARRAY
    $colors = array("Blue", "Green", "Red");
    echo "My Favorite Colors are: $colors[0] , $colors[1], $colors[2]";

    // ARRAY LENGTH
    echo count ($colors). "<hr>";

    // LOOP THROUGH AN INDEXED ARRAY
    $arrlength = count($colors);

    for($x = 0; $x < $arrlength; $x++) {
        echo $colors[$x]."<br>";

    }
    
    echo "<hr>";

    // ASSOCIATIVE ARRAYS
    $tscore = array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
    echo "Bill scored ". $tscore['Bill']." /100.";

    echo "<hr>";

    // LOOP THROUGH AN ASSOCIATIVE ARRAY
    foreach($tscore as $x=> $score) {
        echo "Key=". $x. ", score=". $score;
        echo "<hr>";
    }



    $grades = array(
        array("John", 50, 60),
        array("Bob", 40, 25),
        array("Sam", 35, 48),
        array("Ted", 55, 26)
    );
    echo "<br>";
    echo "<br>";
    echo $grades[0][0].": Test 1: ".$grades[0][1].", Test 2: ".$grades[0][2].".<br />";
    echo $grades[1][0].": Test 1: ".$grades[1][1].", Test 2: ".$grades[1][2].".<br />";
    echo $grades[2][0].": Test 1: ".$grades[2][1].", Test 2: ".$grades[2][2].".<br />";
    echo $grades[3][0].": Test 1: ".$grades[3][1].", Test 2: ".$grades[3][2].".<hr />";

    // SORT
    $names = array("John", "Bob", "Dana", "Sue", "Ted", "Sam", "Xena", "Zara");
    sort($names);

    $nlen = count($names);
    for ($x = 0; $x < $nlen; $x++ ) {
        echo $names[$x];
        echo "<br>";
    }
    
    echo "<hr>";

    // ASSOCIATIVE ARRAY SORT ACCORDING TO VALUE
    $tscore = array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
    asort($tscore);

    foreach($tscore as $x => $x_value) {
        echo "Key=". $x. ", Value=". $x_value;
        echo "<br>";
    }
    ?>
</body>

</html>