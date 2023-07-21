<?php
// Kết nối CSDL
include "../connect/config_oop.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = $_POST['ten_khachhang'];
    $dia_chi = $_POST['DiaChi'];
    $SoDienThoai = $_POST['SoDienThoai'];
    $email = $_POST['Email'];
    $productTotal = $_POST['cart_total_input'];
    $query = "SELECT MaKhachHang FROM khachhang WHERE TenKhachHang = '$user_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Manufacturer already exists, retrieve its ID
        $row = mysqli_fetch_assoc($result);
        $MaKhachHang = $row['MaKhachHang'];
    }
}

// Tạo hóa đơn mới
$date = date('Y-m-d H:i:s');
$sql = "INSERT INTO hoadon (NgayBan,MaKhachHang,MaNhanVien,TongGiaTri,TrangThai) VALUES ('$date','$MaKhachHang', '2', ' $productTotal','Đang giao hàng')";
if ($conn->query($sql) === false) {
    // echo "Lỗi: " . $conn->error;
}
$hoadon = "SELECT MaHoaDon FROM hoadon ORDER BY MaHoaDon DESC LIMIT 1";
$resulthd = mysqli_query($conn, $hoadon);
if (mysqli_num_rows($resulthd) > 0) {
    if ($rowhd = mysqli_fetch_assoc($resulthd)) {
        $MaHoaDon = $rowhd['MaHoaDon'];
    }
}

// Lấy giỏ hàng từ Cookie
$cart = json_decode($_COOKIE['cart'], true);


// Thêm các sản phẩm vào chi tiết hóa đơn
foreach ($cart as $product) {
    $productName = $product['name'];
    $productPrice = $product['price'];
    $productQuantity = $product['quantity'];
    $producttotal = $productQuantity * $productPrice;
    $sqll = "select MaSanPham from sanpham where TenSanPham = '$productName'";
    $result = mysqli_query($conn, $sqll);
    if (mysqli_num_rows($result) > 0) {
        if ($rows = mysqli_fetch_assoc($result)) {
            $MaSanPham = $rows['MaSanPham'];
            $sqlct = "INSERT INTO chitiethoadon (MaSanPham, MaHoaDon, SoLuongBan, GiaBan,Thanhtien) VALUES ('$MaSanPham', '$MaHoaDon','$productQuantity','$productPrice', '$producttotal ')";
            if ($conn->query($sqlct) === false) {
                // echo "Lỗi: " . $conn->error;
            }
        }
    }
}

// Xóa cookie giỏ hàng
// Xóa dữ liệu trong cookie khi nhấn vào nút thanh toán
unset($_COOKIE['cart']);
setcookie('cart', null, -1, '/');
$sqlcp = "UPDATE khachhang SET  DiaChi='$dia_chi',SoDienThoai='$SoDienThoai',Email='$email' WHERE MaKhachHang='$MaKhachHang'";
$resultcp = mysqli_query($conn, $sqlcp);
// Execute the query
if ($resultcp) {
    // Product added successfully
    header("Location: http://localhost/DOANPHPMYSQL_2023/admin/category/order.php");
} else {
    // Error occurred while adding the product
    echo "Error adding product: " . mysqli_error($conn);
}
// Đóng kết nối CSDL
$conn->close();
?>