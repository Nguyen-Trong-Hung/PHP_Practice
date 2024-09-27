<?php
$hung = 'I love Ha <br>';
echo $hung;


// Debug Data
// var_dump($hung);

$arr = [1, 2, 3, 4];

// print_r($arr);

// Ghép 
$ha = 'Yes, I same<br>';
echo 'Hung said: ' . $hung . '<br>' . 'Ha said: ' . $ha;

//Hằng số
define('_PI', 3.14);
const SO_PI = 3.14;

//Ép kiểu
$bien1 = 'true';
echo is_bool($bien1);

//Toán tử so sánh ==, ===
// ==: So sánh giá trị
// ===: So sánh cả kiểu dữ liệu và giá trị
$bien12 = 10;
$bien11 = '10';

// echo $bien11 == $bien12;
echo $bien11 === $bien12;


//die and exit: dừng toàn bộ chương trình bên dưới
echo 'dừng bên dưới';
exit('Đã dừng');

// echo('Dừng thật chưa');

// Alternative syntax for control structures in PHP

// Alternative syntax for if statement
if ($condition):
    // Code to execute if condition is true
elseif ($anotherCondition):
    // Code to execute if another condition is true
else:
    // Code to execute if none of the conditions are true
endif;

// Alternative syntax for for loop
for ($i = 0; $i < 10; $i++):
    // Code to execute in each iteration
endfor;

// Alternative syntax for while loop
while ($condition):
    // Code to execute while condition is true
endwhile;

// Alternative syntax for foreach loop
foreach ($array as $key => $value):
    // Code to execute for each element in the array
endforeach;
?>