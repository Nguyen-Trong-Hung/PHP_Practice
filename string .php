<?php

// string trong php
$bien = 'Hello World';

define('KNORR', 'Thien Ha');

var_dump($bien);

// Tách chuối vào mảng

$chuoi = 'Hello World';
$chuoi2 = 'Hello, World, I, love, you';
$arr = explode(',', $chuoi2);

var_dump($arr);
print_r($arr);


// Ghép mảng thành chuỗi
$chuoi3 = implode(' ', $arr);
echo $chuoi3 . '<br>';
// Đếm số ký tự trong chuỗi
echo strlen($chuoi3);

// Hàm đếm số chữ trong chuỗi
echo str_word_count($chuoi3);

// Hàm lặp chuỗi
echo str_repeat('Ha'.' ', 10);

// Hàm tìm kiếm chuỗi
echo str_replace('World', 'Thien Ha', $chuoi);

// Hàm mã hóa chuỗi theo md5
echo md5($chuoi).'<br>';