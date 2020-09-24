<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaring PHP constant</title>
</head>
<body>
    <?php
    define("WELCOME", "Hello my name is Alvi Geovanny");
    echo WELCOME;

    echo "<hr />";
    // CASE INSENSITIVE
    // doesnt work for now anymore.

    // define("WELCOME2", "Hello my name is Alvi Geovanny", true);
    // echo welcome2;

    echo "<hr />";
    // CONSTANTS ARE GLOBAL;
    define("CAR", "VOLVO");

    function mycar() {
        echo CAR;
    }

    mycar();
    ?>
</body>
</html>