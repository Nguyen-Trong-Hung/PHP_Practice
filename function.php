<?php
// Hàm tính tổng 2 số
function calculateSum($a, $b) {
    $sum = $a + $b;
    return $sum;
}

// Gọi hàm
$result1 = calculateSum(4, 5);
echo "Sum of 4 and 5: " . $result1 . "\n";  // Output: 9

// Kiểm tra nếu hàm tồn tại thì không khai báo lại
if (!function_exists('calculateSum')) {
    function calculateSum($a, $b) {
        return $a + $b;
    }
} else {
    echo "Hàm calculateSum chưa tồn tại\n";
}

// Biến toàn cục
$globalVar = 10;

// Biến cục bộ: chỉ có thể sử dụng trong hàm
function localVariableExample() {
    $localVar = 5; // Biến cục bộ
    echo "Biến cục bộ trong hàm: $localVar<br>";
}

localVariableExample();
// echo $localVar; // Lỗi vì biến cục bộ không thể truy cập bên ngoài hàm

// Sử dụng biến toàn cục trong hàm
function useGlobalVar() {
    global $globalVar; // Khai báo sử dụng biến toàn cục
    echo "Giá trị của biến toàn cục: $globalVar<br>";
}

useGlobalVar();

// Biến tĩnh: giữ giá trị giữa các lần gọi hàm
function staticVariableExample() {
    static $staticVar = 0; // Biến tĩnh
    $staticVar++;
    echo "Giá trị của biến tĩnh: $staticVar<br>";
}

staticVariableExample(); // In ra 1
staticVariableExample(); // In ra 2
?>