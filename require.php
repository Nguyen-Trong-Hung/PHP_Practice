<?php
    // include'index.php';// Dùng để import file vào file hiện tại nếu lỗi thì các câu lệnh bên dưới vẫn chạy
    // include_once'index.php';
    // require'index.php';// Dùng để import file vào file hiện tại nếu lỗi thì các câu lệnh bên dưới sẽ không chạy
    // require_once'index.php';

    // Sự khác biệt giữa print_r và echo trong PHP

    // echo
    // echo là một cấu trúc ngôn ngữ trong PHP được sử dụng để xuất một hoặc nhiều chuỗi ra màn hình.
    // echo không thể xuất các kiểu dữ liệu phức tạp như mảng hoặc đối tượng một cách trực tiếp.
    echo "Hello, World!"; // Xuất chuỗi "Hello, World!" ra màn hình

    // print_r
    // print_r là một hàm trong PHP được sử dụng để xuất thông tin về một biến theo cách dễ đọc.
    // print_r có thể xuất các kiểu dữ liệu phức tạp như mảng hoặc đối tượng.
    $array = array('foo' => 'bar', 'baz' => 'qux');
    print_r($array); // Xuất thông tin về mảng theo cách dễ đọc
?>