
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First Web Page -PHP</h1>
    <?php
    // Displaying a simple text using PHP
    echo "Welcome To My Website";
    ?>

    <?php
    // Declaring variables and performing arithmetic operations
    $x =5;
    $y =7;
    $z =$x + $y;
    echo "If x=$x and y=$y,
    then the value of z=$z";
    ?>

    <?php
    // Displaying a string using PHP
    $txt = "Hello World!";
    echo $txt;
    ?>

    <?php
    // Displaying the length of a string
    echo strlen("Hello World!");
    ?>

    <?php
    // Displaying the position of a substring within a string
    echo strpos("Hello Wolrd!","world");
    ?>

    <?php
    // Displaying the current date in different formats
    echo date('l, d-m-Y');
    echo "<br/>";
    echo date('d / M / y');
    echo "<br/>";
    echo date('D - M / Y');
    ?>

    <?php
    // Displaying the current time
    echo date('H:i:s a');

    echo "<br/>";

    // Displaying the current date and time in a combined format
    echo date('l, d-,-Y h:i:s a');
    ?>

</body>
</html>
<!--DELIMITER-->
<!--DELIMITER-->In this updated code, I have added comments to explain each section of the code. These comments provide a clear and concise explanation of the code's functionality..</s>