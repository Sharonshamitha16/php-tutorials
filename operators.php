<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 7;
    $b = 8;
    $c = 1.2;

    echo "Add: " . ($a + $b) . '<br>';
    echo "Subtract: " . ($a - $b) . '<br>';
    echo "Multiply: " . ($a * $b) . '<br>';
    echo "Divide: " . ($a / $b) . '<br>';
    echo "Modulo: " . ($a % $b) . '<br>';

    echo "Multioperators:<br>";
    echo ($a + $b - $c) . '<br>';
    echo ($a - $b + $c) . '<br>';
    echo ($a * $b / $c) . '<br>';
    echo ($a / $b % $c) . '<br>';
    echo ($a % $b / $c) . '<br>';

    $a += $b; echo "a += b: " . $a . '<br>'; 
    $a -= $b; echo "a -= b: " . $a . '<br>'; 
    $a *= $b; echo "a *= b: " . $a . '<br>'; 
    $a /= $b; echo "a /= b: " . $a . '<br>'; 
    $a %= $b; echo "a %= b: " . $a . '<br>';

    echo "Post-increment: " . $a++ . '<br>';
    echo "Pre-increment: " . ++$a . '<br>';
    echo "Post-decrement: " . $a-- . '<br>';
    echo "Pre-decrement: " . --$a . '<br>';

    echo "abs(-17): " . abs(-17) . '<br>';
    echo "pow(5, 3): " . pow(2, 3) . '<br>';
    echo "sqrt(16): " . sqrt(16) . '<br>';
    echo "max(2, 3): " . max(2, 3) . '<br>';
    echo "min(2, 3): " . min(2, 3) . '<br>';
    echo "round(2.4): " . round(2.4) . '<br>';
    echo "round(2.6): " . round(2.6) . '<br>';
    echo "floor(2.6): " . floor(2.6) . '<br>';
    echo "ceil(2.4): " . ceil(2.4) . '<br>';
    ?>
</body>
</html>
