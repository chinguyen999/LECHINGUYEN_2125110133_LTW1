<?php
// ============================================================
// 1. Khai báo hai số nguyên và thực hiện các phép toán
// ============================================================
echo "<h3>1. Các phép toán số học</h3>";
$a = 15;
$b = 4;

echo "Số a = $a, Số b = $b <br>";
echo "Cộng ($a + $b): " . ($a + $b) . "<br>";
echo "Trừ ($a - $b): " . ($a - $b) . "<br>";
echo "Nhân ($a * $b): " . ($a * $b) . "<br>";
echo "Chia ($a / $b): " . ($a / $b) . "<br>";
echo "Chia lấy dư ($a % $b): " . ($a % $b) . "<br>";


// ============================================================
// 2. So sánh giữa số nguyên (int) và chuỗi số (string)
// ============================================================
echo "<h3>2. Toán tử so sánh</h3>";
$soNguyen = 10;      // Kiểu int
$chuoiSo = "10";     // Kiểu string

echo "Biến \$soNguyen = 10 (int), \$chuoiSo = '10' (string) <br>";
echo "So sánh == : "; var_dump($soNguyen == $chuoiSo); echo "<br>";
echo "So sánh === : "; var_dump($soNguyen === $chuoiSo); echo "<br>";
echo "So sánh != : "; var_dump($soNguyen != $chuoiSo); echo "<br>";
echo "So sánh <> : "; var_dump($soNguyen <> $chuoiSo); echo "<br>";
echo "So sánh !== : "; var_dump($soNguyen !== $chuoiSo); echo "<br>";

/*
   Sự khác nhau giữa các toán tử so sánh:
   - Toán tử (==): Chỉ so sánh GIÁ TRỊ (10 bằng '10' -> true).
   - Toán tử (===): So sánh cả GIÁ TRỊ và KIỂU DỮ LIỆU (int khác string -> false).
   - Toán tử (!=) và (<>): Khác nhau về GIÁ TRỊ (cả hai đều kiểm tra giá trị khác nhau -> false).
   - Toán tử (!==): Khác nhau về GIÁ TRỊ hoặc KIỂU DỮ LIỆU (khác kiểu dữ liệu -> true).
*/


// ============================================================
// 3. Phép tăng trước (++$x) và phép tăng sau ($x++)
// ============================================================
echo "<h3>3. Phép tăng trước và tăng sau</h3>";

// Phép tăng trước (++$x)
$x = 5;
echo "Giá trị ban đầu của \$x: $x <br>";
echo "Giá trị khi thực hiện ++\$x: " . (++$x) . "<br>";
echo "Giá trị của \$x sau phép toán: $x <br><br>";

// Phép tăng sau ($x++)
$y = 5;
echo "Giá trị ban đầu của \$y: $y <br>";
echo "Giá trị khi thực hiện \$y++: " . ($y++) . "<br>";
echo "Giá trị của \$y sau phép toán: $y <br>";

/*
   Sự khác nhau giữa ++$x và $x++:
   - Tăng trước (++$x): Cộng thêm 1 vào biến TRƯỚC, sau đó mới trả về giá trị mới để in ra.
   - Tăng sau ($x++): Trả về giá trị hiện tại để in ra TRƯỚC, sau đó mới cộng thêm 1 vào biến.
*/


// ============================================================
// 4. Toán tử nối chuỗi (.) và (.=)
// ============================================================
echo "<h3>4. Toán tử nối chuỗi</h3>";
$chuoi1 = "Lập trình ";
$chuoi2 = "Web PHP";

// Dùng toán tử (.)
$ketQua = $chuoi1 . $chuoi2;
echo "Nối bằng dấu (.): " . $ketQua . "<br>";

// Dùng toán tử (.=)
$chuoi1 .= $chuoi2;
echo "Nối bằng dấu (.=): " . $chuoi1 . "<br>";

/*
   Sự khác nhau giữa (.) và (.=):
   - Toán tử (.): Ghép hai chuỗi lại với nhau và trả về chuỗi mới, không làm thay đổi giá trị biến gốc.
   - Toán tử (.=): Nối thêm chuỗi bên phải vào thẳng biến bên trái và gán đè lại cho chính biến đó.
*/


// ============================================================
// 5. Đếm số lượng ký tự với strlen() và mb_strlen()
// ============================================================
echo "<h3>5. Đếm số lượng ký tự</h3>";
$khongDau = "Le Chi Nguyen";
$coDau = "Lê Chí Nguyên";

echo "Chuỗi không dấu '$khongDau' dùng strlen(): " . strlen($khongDau) . " ký tự <br>";
echo "Chuỗi có dấu '$coDau' dùng strlen(): " . strlen($coDau) . " byte (sai số ký tự) <br>";
echo "Chuỗi có dấu '$coDau' dùng mb_strlen(): " . mb_strlen($coDau, "UTF-8") . " ký tự <br>";

/*
   Sự khác nhau giữa strlen() và mb_strlen():
   - strlen(): Đếm số BYTE của chuỗi. Với tiếng Việt có dấu (UTF-8), mỗi ký tự có dấu chiếm từ 2-3 byte nên hàm này đếm bị dư.
   - mb_strlen(): Đếm chính xác số KÝ TỰ hiển thị thực tế của các chuỗi đa byte (như tiếng Việt có dấu).
*/


// ============================================================
// 6. Chuyển chuỗi thành chữ in hoa và chữ thường
// ============================================================
echo "<h3>6. Chuyển đổi chữ hoa và chữ thường</h3>";
$vanBan = "Lập Trình Web PHP & MySQL";

echo "Chuỗi gốc: $vanBan <br>";
echo "Dùng strtoupper(): " . strtoupper($vanBan) . "<br>";
echo "Dùng strtolower(): " . strtolower($vanBan) . "<br>";
echo "Dùng mb_strtoupper(): " . mb_strtoupper($vanBan, "UTF-8") . "<br>";
echo "Dùng mb_strtolower(): " . mb_strtolower($vanBan, "UTF-8") . "<br>";

/*
   Sự khác nhau giữa strtoupper()/strtolower() và mb_strtoupper()/mb_strtolower():
   - strtoupper() và strtolower(): Chỉ chuyển đổi được các ký tự ASCII (không dấu), thường bị lỗi hoặc giữ nguyên các chữ cái tiếng Việt có dấu (như Ậ, ÌNH, Ử).
   - mb_strtoupper() và mb_strtolower(): Hỗ trợ chuẩn mã hóa đa byte (UTF-8), chuyển đổi chính xác toàn bộ tiếng Việt có dấu sang chữ hoa hoặc chữ thường.
*/


// ============================================================
// 7. Ép kiểu chuỗi về số nguyên (int) và hiển thị bằng var_dump()
// ============================================================
echo "<h3>7. Ép kiểu chuỗi về int</h3>";
$chuoiDauSo = "123 abc";
$chuoiDauChu = "abc 123";

$epKieu1 = (int)$chuoiDauSo;
$epKieu2 = (int)$chuoiDauChu;

echo "Ép kiểu '123 abc' thành int: ";
var_dump($epKieu1); // Kết quả: int(123) - lấy phần số đứng ở đầu chuỗi
echo "<br>";

echo "Ép kiểu 'abc 123' thành int: ";
var_dump($epKieu2); // Kết quả: int(0) - không có số ở đầu nên trả về 0
echo "<br>";


// ============================================================
// 8. Khai báo các kiểu dữ liệu cơ bản và kiểm tra bằng var_dump()
// ============================================================
echo "<h3>8. Kiểm tra kiểu dữ liệu với var_dump()</h3>";
$kieuInt = 2026;
$kieuFloat = 9.5;
$kieuString = "Sinh viên CNTT";
$kieuBool = true;

echo "Biến int: "; var_dump($kieuInt); echo "<br>";
echo "Biến float: "; var_dump($kieuFloat); echo "<br>";
echo "Biến string: "; var_dump($kieuString); echo "<br>";
echo "Biến bool: "; var_dump($kieuBool); echo "<br>";
?>
