<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo " <h1 >inbuilt functions</h1>";
    echo "<h3 >sorting a array in ascending order using SORT_ASC...</h3> <br/>";
    $number_arr =[9,4,5,6,1,3,5,2,12,24,99] ;
    sort($number_arr,SORT_ASC);
    echo "<pre>";
    print_r($number_arr); 
    echo "</pre>"; 

    echo "<h3 >sorting a array in ascending order using SORT_DESC...</h3> <br/>";
    $number_arr1 =[1,2,3,4,5,5,6,7,8,9,10] ;
    rsort($number_arr1, SORT_DESC);
    echo "<pre>";
    print_r($number_arr1);
    echo "</pre>"; 

    
    echo "PHP version - " . PHP_VERSION . "<br/>";
    echo "PHP_MAJOR_VERSION - " . PHP_MAJOR_VERSION . "<br/>";
    echo "PHP_MINOR_VERSION - " . PHP_MINOR_VERSION . "<br/>";
    echo "PHP_INT_MAX - " . PHP_INT_MAX . "<br/>";
    echo "PHP_INT_MIN - " . PHP_INT_MIN . "<br/>";
    echo "PHP_FLOAT_DIG - " . PHP_FLOAT_DIG . "<br/>";
    
    
   
    $name = "sam santhosh";
    $age=18;
    $agemorethan18 = true;
    $salary = 20000.15;
    echo is_String($name) ,"<br/>  ";
    echo is_int($age) ,"<br/> ";
    echo is_bool($agemorethan18) ,"<br/> ";
    echo is_double($salary) ,"<br/> ";
    echo is_array($number_arr) ,"<br/> ";
    echo '<br>  type of the data ';
    echo gettype($name) . '<br>';
    echo gettype($agemorethan18) . '<br>';
    echo gettype($age) . '<br>';    
    echo gettype($salary) . '<br>';
    echo gettype($number_arr) . '<br>';
        ?>
</body>
</html>