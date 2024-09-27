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

// Hàm mã hóa chuỗi theo sha1
echo sha1($chuoi).'<br>';

// in ra hiển thị thẻ html
echo htmlentities('<h1>Thien Ha</h1>');

// Chuyển định dạng thực thể html sang định dạng HTML ban đầu
echo html_entity_decode(htmlentities('<h1>Thien Ha</h1>'));

// Hàm loại bỏ các thẻ html khỏi chuỗi
echo strip_tags('<h1>Thien Ha</h1>');

// Hàm cắt chuỗi
echo substr($chuoi, 0, 5);

// Tách một chuỗi từ một ký tự nào đó
echo strtok($chuoi2, ',');

// Hàm cắt chuỗi theo từ
echo strstr($chuoi2, 'World');

// Tìm vị trí của chuỗi
echo strpos($chuoi2, 'World');

// Vừa cắt chuỗi vừa thay thế chuỗi
echo substr_replace($chuoi2, 'Thien Ha', 0, 5);

// Chuyển đổi chữ hoa thành chữ thường và ngược lại
strtolower($chuoi);
strtoupper($chuoi);

// Chuyển chữ cái đầu tiên thành chữ hoa và ngược lại (Upercase and Lowercase)
ucfirst($chuoi);
lcfirst($chuoi);

// Chuyển chữ cái đầu tiên của tất cả các từ thành chữ hoa
ucwords($chuoi);

// Loại bỏ khoảng trắng ở đầu và cuối chuỗi
trim('   Hello World   ');
// Loại bỏ chữ cái H ở đầu và cuối chuỗi
echo trim($chuoi, 'H');

$arr = [1, 2, 3, 4];

// Chuyển chuỗi ở dạng json thành array hoặc object
$jsondecode = json_decode(json_encode($arr));
print_r($jsondecode);
// Chuyển array hoặc object thành chuỗi json
json_encode($arr);

