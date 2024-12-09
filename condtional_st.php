<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Conditional statements <br/>";
    $age = 18;
    if($age>=18){
        echo " eligible for voting";
    } else{
        echo " not eligible for voting";
    }
    echo "<br/>";
    $a = 10 ; $b=4; $c=20;
    if($a>$b && $a>$c){
        echo "A is greater";
    }
    elseif($b>$c && $b>$a){
        echo "B is Greater";
    }
    else{
        echo "C is greater";
    }
    echo "<br/>";

    $day = "Monday";

    switch ($day) {
        case 'Monday':
            echo " Weekday";
            break;
            case 'Tuesday':
                echo " Weekday";
                break;    
                case 'Wednesday':
                    echo " Weekday";
                    break;
                    case 'Thursday':
                        echo " Weekday";
                        break;
                        case 'Friday':
                            echo " Weekday";
                            break;
                            case 'Saturday':
                                echo " Weekend";
                                break;
                                case 'Sunday':
                                    echo " Weekend";
                                    break;
                    default:
                    echo "not a day";
                        break;
                };
    
    ?>
</body>
</html>
