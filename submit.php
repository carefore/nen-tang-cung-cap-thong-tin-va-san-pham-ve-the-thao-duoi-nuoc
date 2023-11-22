<?php
// Kết nối tới cơ sở dữ liệu (Thay đổi thông tin để phù hợp với cấu hình của bạn)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ten_co_so_du_lieu";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ request POST
$name = $_POST['name'];
$email = $_POST['email'];
$sport = $_POST['sport'];

// Chuẩn bị truy vấn SQL để chèn dữ liệu vào bảng trong cơ sở dữ liệu
$sql = "INSERT INTO thong_tin_thao_duoi_nuoc (name, email, sport) VALUES ('$name', '$email', '$sport')";

// Thực hiện truy vấn và kiểm tra kết quả
if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được lưu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
