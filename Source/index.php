<?php 
include("db.php");
include("function.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <style>
        /* Tab Links */
.tabs{
  display:flex;
}
.tablinks {
  border: none;
  outline: none;
  cursor: pointer;
  width: 100%;
  padding: 1rem;
  font-size: 13px;
  text-transform: uppercase;
  font-weight:600;
  transition: 0.2s ease;
}
.tablinks:hover{
  background:blue;
  color:#fff;
}
/* Tab active */
.tablinks.active {
   background:blue;
  color:#fff;
}

/* tab content */
.tabcontent {
  display: none;
}
/* Text*/
.tabcontent p {
  color: #333;
  font-size: 16px;
}
/* tab content active */
.tabcontent.active {
  display: block;
}
</style>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="color: var(--bs-yellow);background: rgb(215,172,17);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Nhật trường</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="/"><i class="fas fa-tachometer-alt"></i><span>Tình hình chung</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Cấu hình hệ thống</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="table.php"><i class="fas fa-table"></i><span>&nbsp;Phân tích số liệu</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html"></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <?php 
                //Thông tin ngày hiện tại
                  $query = 'SELECT * FROM `sanluongdien` WHERE NgayTieuThu = CURDATE() ORDER BY NgayTieuThu DESC';
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_array($result);
                //Thông tin tháng hiện tại
                    $query2 = 'SELECT SUM(SanLuong) AS TongSL FROM `sanluongdien` WHERE MONTH(NgayTieuThu) = MONTH(CURDATE()) AND YEAR(NgayTieuThu) = YEAR(CURDATE()) ORDER BY NgayTieuThu DESC';
                    $result2 = mysqli_query($conn, $query2);
                    $currentMonth = mysqli_fetch_array($result2);
                //Thông tin năm hiện tại
                    $query3 = 'SELECT SUM(SanLuong) AS TongSL FROM `sanluongdien` WHERE YEAR(NgayTieuThu) = YEAR(CURDATE()) ORDER BY NgayTieuThu DESC';
                    $result3 = mysqli_query($conn, $query3);
                    $currentYear = mysqli_fetch_array($result3);
                  ?>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Tình hình chung</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="/nhaplieu.php"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Nhập dữ liệu</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <?php 
                                                //Tính tiền điện ngày hiện tại
                                                if ($row) {
                                                    $tongtien_today = $row['sanluong'] * 1938;
                                                }
                                               
                                            ?>
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Tình hình Tài chính (hôm nay)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>
                                                <?php
                                                    if (!$row) {
                                                        echo '0 VNĐ';
                                                    } else {
                                                        echo currency_format($tongtien_today, ' VNĐ');
                                                    }
                                                    
                                                ?>
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <?php 
                                                //Tính tiền điện tháng hiện tại
                                                $tongtien_thangnay = $currentMonth['TongSL'] * 1938;
                                            ?>
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1" style="border-color: var(--bs-blue);"><span style="color: var(--bs-indigo);">Tình hình tài chính (tháng này)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>
                                                <?php
                                                    echo currency_format($tongtien_thangnay, ' VNĐ');
                                                ?>
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters" style="height: 44.33329999999999px;width: 253.5px;">
                                            <div class="col me-2">
                                            <?php 
                                                //Tính tiền điện năm hiện tại
                                                $tongtien_namnay = $currentYear['TongSL'] * 1938;
                                            ?>
                                                <div class="text-uppercase text-success fw-bold text-xs mb-1"><span style="color: var(--bs-indigo);">Tình hình tài chính (Năm nay)</span></div>
                                                <div class="text-dark fw-bold h5 mb-0"><span>
                                                <?php
                                                    echo currency_format($tongtien_namnay, ' VNĐ');
                                                ?>
                                                </span></div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">                                        
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>sản lượng điện&nbsp; (hôm nay)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>
                                                <?php
                                                    if ($row) {
                                                        echo $row['sanluong'];
                                                    } else {
                                                        echo '0';
                                                    }  ?>
                                                 kWh</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span style="color: var(--bs-indigo);">sản lượng điện (tháng này)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>
                                                <?php echo currency_format($currentMonth['TongSL'], ' kWh'); ?> </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col me-2">
                                                <div class="text-uppercase text-success fw-bold text-xs mb-1"><span style="color: var(--bs-indigo);">sản lượng điện (Năm nay)</span></div>
                                                <div class="text-dark fw-bold h5 mb-0"><span>
                                                <?php echo currency_format($currentYear['TongSL'], ' kWh'); ?>
                                                </span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="container-fluid">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="#chartbyyear" class="btn btn-primary">Năm</a>
                        <a href="#chartbymonth" class="btn btn-primary">Tháng</a>
                    </div> 
<p></p>

                        <!-- Tab content -->
                        <div class="wrapper_tabcontent">
                            <div id="allproducts" class="tabcontent active">
                            <?php
                        //Thông tin ngày hiện tại
                        if (isset($_GET["search"]) && !empty($_GET["search"])) {
                            $key = $_GET["search"];
                            $query = "SELECT month(ngaytieuthu) as thangtieuthu, sum(sanluong) AS tongsanluong FROM sanluongdien WHERE year(ngaytieuthu) = '$key' GROUP BY month(ngaytieuthu) ORDER BY month(ngaytieuthu) ASC";
                        } else {
                            $query = 'SELECT month(ngaytieuthu) as thangtieuthu, sum(sanluong) AS tongsanluong FROM sanluongdien WHERE year(ngaytieuthu) = year(curdate()) GROUP BY month(ngaytieuthu) ORDER BY month(ngaytieuthu) ASC';
                        }
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $thangtt[$row['thangtieuthu']] = $row['thangtieuthu'];
                            $tongsl[$row['thangtieuthu']] = $row['tongsanluong'];
                        }
                        // show các năm tiêu thụ có trong data
                        $query_yoc = 'SELECT DISTINCT year(ngaytieuthu) as namtieuthu FROM sanluongdien ORDER BY year(ngaytieuthu) DESC';
                        $result_yoc = mysqli_query($conn, $query_yoc);
                    ?>
                            <div class="row" id="chartbyyear">
                        <div class="col-lg-7 col-xl-8 col-xxl-12">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary fw-bold m-0">Biểu đồ sản lượng điện theo năm</h6>
                                <form action="" method="get">
                            <div class="row"><div class="col" style="padding-right: 0px;">
                                    <select class="form-control" name="search">
                                    <?php
                                    while ($row_yoc = mysqli_fetch_assoc($result_yoc)) {
                                    ?>
                                    <option value="<?php echo $row_yoc['namtieuthu']; ?>" 
                                    <?php
                                    if (isset($_GET["search"]) && !empty($_GET["search"])) {
                                        if ($row_yoc['namtieuthu'] == $_GET['search']) {
                                            ?>
                                            selected
                                            <?php
                                        }
                                    }
                                    ?>
                                    >
                                    <?php echo $row_yoc['namtieuthu']; ?></option>
                                    <?php } ?>    
                                </select>
                                    </div>
                                    <div class="col">                                    
                                        <input class="btn btn-primary" type="submit" value="Chọn" />
                                        </div>
                                        </div>
                                    </form>
                                </div>
                               
                                <div class="card-body">
                                <div><canvas data-bss-chart='{"type":"bar","data":{"labels":[
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
                            </div>
                        </div>
</div>
                    </div>
                </div>
            </div>
                            </div>
                            <div id="Microcontrollers" class="tabcontent">
                            <?php
                        //Thông tin ngày hiện tại
                        if (isset($_GET["month"]) && !empty($_GET["month"]) && isset($_GET["year"]) && !empty($_GET["year"])) {
                            $y = $_GET["year"];
                            $m = $_GET["month"];
                            $query = "SELECT day(ngaytieuthu) as ngay, ngaytieuthu, sanluong FROM sanluongdien WHERE month(ngaytieuthu) = '$m' AND year(ngaytieuthu) = '$y' ORDER BY ngaytieuthu ASC";
                        } else {
                            $query = "SELECT day(ngaytieuthu) as ngay, ngaytieuthu, sanluong FROM sanluongdien WHERE month(ngaytieuthu) = month(CURDATE()) AND year(ngaytieuthu) = year(CURDATE()) ORDER BY ngaytieuthu ASC";
                        }
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $ngaytt[$row['ngay']] = $row['ngaytieuthu'];
                            $sanluong[$row['ngay']] = $row['sanluong'];
                        }
                        // show các năm tiêu thụ có trong data
                        $query_yoc = 'SELECT DISTINCT year(ngaytieuthu) as namtieuthu FROM sanluongdien ORDER BY year(ngaytieuthu) DESC';
                        $result_yoc = mysqli_query($conn, $query_yoc);
                    ?>
                        </div>
                        <div class="container-fluid">
                            <div class="row" id="chartbymonth">
                        <div class="col-lg-7 col-xl-8 col-xxl-12">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary fw-bold m-0">Biểu đồ sản lượng điện theo tháng</h6>
                                <form method="get" action="">
                                <div class="row" style="width: 260px;"><div class="col"style="padding-right: 0px;">
                                <select class="form-control" name="month">
                                    <?php
                                    for ($i = 1; $i < 13; $i++) {
                                        ?>
                                        <option value="<?php echo $i; ?>"
                                        <?php
                                            if (isset($_GET["month"]) && !empty($_GET["month"])) {
                                                if ($i == $_GET["month"]) {
                                                    ?>
                                                    selected
                                                    <?php
                                                }
                                            }
                                        ?>
                                        >
                                        <?php echo $i; ?></option>
                                        <?php
                                    }  
                                    ?>
                                </select>
                                </div><div class="col" style="padding-right: 0px;">
                                <select class="form-control" name="year">
                                <?php
                                while ($row_yoc = mysqli_fetch_assoc($result_yoc)) {
                                ?>
                                <option value="<?php echo $row_yoc['namtieuthu']; ?>"
                                <?php
                                            if (isset($_GET["year"]) && !empty($_GET["year"])) {
                                                if ($row_yoc['namtieuthu'] == $_GET["year"]) {
                                                    ?>
                                                    selected
                                                    <?php
                                                }
                                            }
                                ?>
                                >
                                <?php echo $row_yoc['namtieuthu']; ?></option>
                                <?php } ?>    
                                </select>
                                </div>
                                <div class="col">                                    
                                    <input class="btn btn-primary" type="submit" value="Chọn" />
                                    </div>
                                    </div>
                                </form>
                                </div>
                            
                                <div class="card-body">
                                <div><canvas data-bss-chart='{"type":"bar","data":{"labels":[
                                    <?php
                                        $date = date_create();
                                        for ($i = 1; $i <= 31; $i++) {
                                            echo '"';
                                            if(isset($ngaytt[$i])) {
                                                echo $ngaytt[$i];
                                            } else {
                                                if (isset($_GET["year"]) && !empty($_GET["year"]) && isset($_GET["month"]) && !empty($_GET["month"])) {
                                                    echo $_GET["year"];
                                                    echo '-';
                                                    if ($_GET["month"] <= 10) {
                                                        echo '0';
                                                    }
                                                    echo $_GET["month"];
                                                } else {
                                                    echo date_format($date,'Y-m');
                                                } 
                                                echo '-';
                                                if ($i <= 10) {
                                                    echo '0';
                                                }
                                                echo $i;
                                            }
                                            if ($i == 31) {
                                                echo '"';
                                            } else {
                                                echo '",';
                                            }
                                        }
                                    ?>
                                    ],"datasets":[{"label":"Sản lượng điện","backgroundColor":"#4e73df","borderColor":"#4e73df","data":[
                                    <?php
                                        for ($i = 1; $i <= 31; $i++) {
                                            if(isset($sanluong[$i])) {
                                                echo $sanluong[$i];
                                            } else {
                                                echo '0';
                                            }
                                            if ($i != 31) {
                                                echo ',';
                                            }
                                        }
                                    ?>  
                                    ]}]},"options":{"maintainAspectRatio":true,"legend":{"display":false,"labels":{"fontStyle":"normal"}},"title":{"fontStyle":"bold"},"scales":{"xAxes":[{"ticks":{"fontStyle":"normal"}}],"yAxes":[{"ticks":{"fontStyle":"normal"}}]}}}'></canvas></div>                                </div>
                            </div>
                        </div>
</div>
                    </div>
                </div>
            </div>
                    </div>
                        <!-- //////////////////////////// -->
                













                        
        </div>  
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>