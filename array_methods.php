<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$arr = ["abc", "xyz", 133.7,2,true];

echo '<pre>';
var_dump($arr , ":Array printed"); 
echo '</pre>';

echo $arr[3].'<br>';
$arr[1] = "pqr";
print_r ($arr,"replaced the first index");
echo count($arr).'<br>';

array_push($arr, 'pushed');
print_r($arr ,"push an array");

array_pop($arr, "pop an array");//delete at last

echo '<pre>';
var_dump($arr);
echo '</pre>';

array_unshift($arr, 'unshifted');
print_r($arr , "unshift an array");

array_shift($arr ,"shift an array - delete an array");//delete at first
print_r($arr);

$string = "sara,sam,shami";
echo '<pre>';
var_dump(explode(",", $string, "converting into array"));// into array
echo '</pre>';



echo implode(",", $arr ,"converting into string").'<br>';// into string

echo '<pre>';
var_dump(in_array('pqr', $arr, "check element in an array or not"));
echo '</pre>';

echo '<pre>';
var_dump(array_search(133, $arr));
echo '</pre>';


$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$evens = array_filter($numbers, function($n){
    return $n % 2 === 0;
});
echo '<pre>';
var_dump($evens);
echo '</pre>';

$squares = array_map(fn($n) => $n + 1, $numbers);
echo '<pre>';
var_dump($squares);
echo '</pre>';

$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item);
echo $sum.'<br>';

?>
</body>
</html>