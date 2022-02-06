<?php
include("db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM khoiluong_vattu WHERE ID = '$id'";
    $result = mysqli_query($conn, $sql);
}
echo '<script language="javascript">alert("Xóa thành công"); window.location="profile.php";</script>';
?>