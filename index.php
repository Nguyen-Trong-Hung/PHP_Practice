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

echo('Dừng thật chưa');

