<?php
// Define a function to calculate the sum of two numbers
function calculateSum($a, $b) {
    $sum = $a + $b;
    return $sum;
}

// Call the function with direct values
$result1 = calculateSum(4, 5);
echo "Sum of 4 and 5: " . $result1 . "\n";  // Output: 9

// Call the function with variables
$num1 = 6;
$num2 = 7;
$result2 = calculateSum($num1, $num2);
echo "Sum of $num1 and $num2: " . $result2 . "\n";  // Output: 13

// Check if the function already exists before defining it again
if (!function_exists('calculateSum')) {
    function calculateSum($a, $b) {
        return $a + $b;
    }
} else {
    echo "The function 'calculateSum' already exists!\n";
}


// Biến toàn cục
$globalVar = 10;

// Hàm có sử dụng return để trả về giá trị
function addNumbers($a, $b) {
    return $a + $b; // Trả về tổng của $a và $b
}

$result = addNumbers(5, 7);
echo "Kết quả của hàm có return: $result<br>"; // In ra 12

// Hàm không sử dụng return, chỉ in kết quả trực tiếp
function displaySum($a, $b) {
    echo "Tổng của $a và $b là: " . ($a + $b) . "<br>";
}

displaySum(3, 4); // In ra 7

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
staticVariableExample(); // In ra 3
?>
