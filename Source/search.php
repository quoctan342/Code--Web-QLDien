<?php 
include("db.php");
// Nếu tồn tại POST action
 if (isset($_POST['action']))
 {
     // Xử lý POST action
     $action = trim(addslashes(htmlspecialchars($_POST['action'])));

// Tìm kiếm bài viết
if ($action == 'search_post')
{
    $search_year = trim(htmlspecialchars(addslashes($_POST['search_year'])));
    $search_month = trim(htmlspecialchars(addslashes($_POST['search_month'])));

    $query = "SELECT day(ngaytieuthu) as ngay, ngaytieuthu, sanluong FROM sanluongdien WHERE month(ngaytieuthu) = '$search_month' AND year(ngaytieuthu) = '$search_year' ORDER BY ngaytieuthu ASC";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $ngaytieuthu[$row['ngay']] = $row['ngaytieuthu'];
        $tongsl[$row['ngay']] = $row['sanluong'];
    }
?>
    <canvas data-bss-chart='{"type":"bar","data":{"labels":[
        <?php
            for ($i = 1; $i <= 12; $i++) {
                echo '"Tháng ';
                if(isset($thangtt[$i])) {
                    echo $thangtt[$i];
                } else {
                    echo $i;
                }
                if ($i == 12) {
                    echo '"';
                } else {
                    echo '",';
                }
            }
        ?>
        ],"datasets":[{"label":"Sản lượng điện","backgroundColor":"#4e73df","borderColor":"#4e73df","data":[
        <?php
            for ($i = 1; $i <= 12; $i++) {
                if(isset($tongsl[$i])) {
                    echo $tongsl[$i];
                } else {
                    echo '0';
                }
                if ($i != 12) {
                    echo ',';
                }
            }
        ?>  
        ]}]},"options":{"maintainAspectRatio":true,"legend":{"display":false,"labels":{"fontStyle":"normal"}},"title":{"fontStyle":"bold"},"scales":{"xAxes":[{"ticks":{"fontStyle":"normal"}}],"yAxes":[{"ticks":{"fontStyle":"normal"}}]}}}'></canvas></div>                                </div>

<?php
}

 } else {
     new Redirect($_DOMAIN);
 }



?>