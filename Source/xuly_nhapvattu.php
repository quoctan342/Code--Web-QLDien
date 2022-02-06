<?php
// Kết nối cơ sở dữ liệu

// Dùng isset để kiểm tra Form
if(isset($_POST['nhapvt'])){
    $tenvattu = trim($_POST['tenvattu']);
    $donvi = trim($_POST['donvi']);
    $soluong = trim($_POST['soluong']);
    $duphong = trim($_POST['duphong']);
    $tongkhoiluong = trim($_POST['tongkhoiluong']);
    $dongia = trim($_POST['dongia']);
    $tonggiatri = trim($_POST['tonggiatri']);
    $ghichu = trim($_POST['ghichu']);
    if (empty($ghichu)) {
        $ghichu = '';
    }
    $sql = "INSERT INTO khoiluong_vattu(tenvattu, donvi, soluong, duphong, tongkhoiluong, dongia, tongdongia, ghichu) VALUES ('$tenvattu','$donvi','$soluong','$duphong','$tongkhoiluong','$dongia','$tonggiatri','$ghichu')";
    echo '<script language="javascript">alert("Nhập vật tự thành công"); window.location="profile.php";</script>';

    if (mysqli_query($conn, $sql)){
    }
    else {
    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="profile.php";</script>';
    }
}
?>