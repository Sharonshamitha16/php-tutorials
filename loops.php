
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$counter=0;
while ($counter < 10) {
    echo "Printing counter from while: $counter<br>";
   
    $counter++;
};

$counter = 0; 
do {
    echo "Printing counter from do-while: $counter<br>";

    $counter++;
} while ($counter < 10);
for ($i = 0; $i < 10; $i++) {
    echo "Printing counter from for loop: $i<br>";
};
?>
</body>
</html>