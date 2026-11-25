<?php
// ============================================================
// YÊU CẦU 5: Chú thích mã nguồn (Single-line và Multi-line)
// ============================================================
// Đây là chú thích trên một dòng (Single-line comment)

/*
   Đây là chú thích trên nhiều dòng (Multi-line comment)
   Bài thực hành: Lập trình Web 1 - PHP & MySQL
   Tệp: Lab1/test1.php
*/

echo "<h3>1. In thông tin trực tiếp bằng echo</h3>";
echo "Họ tên: Lê Chí Nguyên <br>";
echo "Ngày sinh: 01/01/2003 <br>";
echo "Mã số sinh viên: 2125110133 <br>";


echo "<h3>2. Khai báo biến và in giá trị</h3>";
$hoTen = "Lê Chí Nguyên";
$mssv = "2125110133";
$soDienThoai = "0901234567";
$ngaySinh = "01/01/2003";

echo "Họ tên: " . $hoTen . "<br>";
echo "MSSV: " . $mssv . "<br>";
echo "Số điện thoại: " . $soDienThoai . "<br>";
echo "Ngày sinh: " . $ngaySinh . "<br>";


echo "<h3>3. Khai báo hằng số kết nối CSDL và hiển thị</h3>";
define("HOST", "localhost");
define("DATABASE", "quanly_sinhvien");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";


echo "<h3>4. Phân biệt dấu nháy kép (\" \") và dấu nháy đơn (' ')</h3>";
// Dấu nháy kép: Tự động hiểu và hiển thị giá trị của biến bên trong chuỗi
echo "Dùng nháy kép: Xin chào $hoTen <br>";

// Dấu nháy đơn: Coi tất cả nội dung bên trong là văn bản thuần túy, không hiểu biến
echo 'Dùng nháy đơn: Xin chào $hoTen <br>';
?>
