<?php
// Kết nối cơ sở dữ liệu

// Dùng isset để kiểm tra Form
if(isset($_POST['nhapsld'])){
$sanluongdien = trim($_POST['sanluongdien']);
$ngaytieuthu = trim($_POST['ngaytieuthu']);

$date = date_create();
$f_date = date_format($date,'Y-m-d');
if ($ngaytieuthu > $f_date) {
    echo '<script language="javascript">alert("Ngày này chưa tới nên không thể nhập dữ liệu được"); window.location="nhaplieu.php";</script>';
    die();
}

$sql = "SELECT ngaytieuthu FROM sanluongdien WHERE ngaytieuthu = '$ngaytieuthu'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Ngày vừa nhập đã nhập sản lượng điện rồi"); window.location="nhaplieu.php";</script>';

// Dừng chương trình
die ();
} else {
    $sql = "INSERT INTO sanluongdien (sanluong, ngaytieuthu) VALUES ('$sanluongdien','$ngaytieuthu')";
    echo '<script language="javascript">alert("Nhập sản lượng điện thành công!"); window.location="nhaplieu.php";</script>';
    
    if (mysqli_query($conn, $sql)){
    }
    else {
    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="nhaplieu.php";</script>';
    }
}
}
?>