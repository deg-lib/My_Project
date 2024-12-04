<?php
// $numbers = [5, -5, 10, -10, 3, -3, 8, -8, 12, -12];
// $sum1 = 0;
// $sum2 = 0;
// foreach ($numbers as $number) {
//     if ($number < 0) {
//         $sum1 = $sum1 + $number;
//     }

//     if ($number > 0) {
//         $sum2 = $sum2 + $number;
//     }
// }

// echo $sum1 . " это сумма отрицательных чисел. ";
// echo $sum2 . " это сумма положительных чисел. ";

// echo ($sum2 - abs($sum1)) . " это их разность";


// $target = 12;

// for ($i = 0; $i < 7; $i++) 
// {
//     for ($j = $i + 1; $j < 7; $j++)
//     {
//         if ($numbers[$i] + $numbers[$j] === $target) {
//                 echo $numbers[$i] . " " .  $numbers[$j];
//                 break;
//         }  
//     }
// }

// for ($i = 6; $i >= 0; $i--) {
//      echo $numbers[$i] . " ";
// }
// $numbers = [1, 3, 5, 5, 8, 9, 6];
// $sum = 0;
// foreach ($numbers as $number) {
//     $number = $number * 2;
//     $sum = $sum + $number;
// }

// echo $sum;

// $numbers1 = [1, 3, 5, 5, 8, 9, 6];
// $numbers2 = [1, 10, 8, 45, 100, 3, 4];

// for ($i = 0; $i < count($numbers1); $i++) {
//     for ($j = 0; $j < count($numbers2); $j++) {
//         if ($numbers1[$i] === $numbers2[$j]) {
//             echo $numbers1[$i] . " ";
//         }

//     }
// }

$numbers = [4, 1, 2, 1, 2];
$flag = false;

for ($i = 0; $i < count($numbers); $i++) {
    for ($j = $i + 1; $j < count($numbers); $j++) {
        if ($numbers[$i] === $numbers[$j]){
            $flag = false;
            break;
        } else {
            $flag = true;
        }
    }
    if ($flag === true) {
        echo $numbers[$i];
    }
}