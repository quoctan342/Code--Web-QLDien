<?php include("db.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Nhập sản lượng điện</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css" />
  </head>

  <body id="page-top">
    <div id="wrapper">
      <nav
        class="
          navbar navbar-dark
          align-items-start
          sidebar sidebar-dark
          accordion
          bg-gradient-primary
          p-0
        "
        style="color: var(--bs-yellow); background: rgb(215, 172, 17)"
      >
        <div class="container-fluid d-flex flex-column p-0">
          <a
            class="
              navbar-brand
              d-flex
              justify-content-center
              align-items-center
              sidebar-brand
              m-0
            "
            href="#"
          >
            <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"><span>Nhật trường</span></div>
          </a>
          <hr class="sidebar-divider my-0" />
          <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item">
              <a class="nav-link" href="/"
                ><i class="fas fa-tachometer-alt"></i
                ><span>Tình hình chung</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="profile.php"
                ><i class="fas fa-user"></i><span>Cấu hình hệ thống</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="table.php"
                ><i class="fas fa-table"></i
                ><span>&nbsp;Phân tích số liệu</span></a
              >
            </li>
            <li class="nav-item"><a class="nav-link" href="login.html"></a></li>
            <li class="nav-item">
              <a class="nav-link" href="register.html"></a>
            </li>
          </ul>
          <div class="text-center d-none d-md-inline">
            <button
              class="btn rounded-circle border-0"
              id="sidebarToggle"
              type="button"
            ></button>
          </div>
        </div>
      </nav>
      <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
          <nav
            class="
              navbar navbar-light navbar-expand
              bg-white
              shadow
              mb-4
              topbar
              static-top
            "
          >
            <div class="container-fluid">
              <button
                class="btn btn-link d-md-none rounded-circle me-3"
                id="sidebarToggleTop"
                type="button"
              >
                <i class="fas fa-bars"></i>
              </button>
              <form
                class="
                  d-none d-sm-inline-block
                  me-auto
                  ms-md-3
                  my-2 my-md-0
                  mw-100
                  navbar-search
                "
              >
                <div class="input-group"></div>
              </form>
              <ul class="navbar-nav flex-nowrap ms-auto">
                <li class="nav-item dropdown d-sm-none no-arrow">
                  <a
                    class="dropdown-toggle nav-link"
                    aria-expanded="false"
                    data-bs-toggle="dropdown"
                    href="#"
                    ><i class="fas fa-search"></i
                  ></a>
                  <div
                    class="
                      dropdown-menu dropdown-menu-end
                      p-3
                      animated--grow-in
                    "
                    aria-labelledby="searchDropdown"
                  >
                    <form class="me-auto navbar-search w-100">
                      <div class="input-group">
                        <input
                          class="bg-light form-control border-0 small"
                          type="text"
                          placeholder="Search for ..."
                        />
                        <div class="input-group-append">
                          <button class="btn btn-primary py-0" type="button">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                  <div class="nav-item dropdown no-arrow">
                    <a
                      class="dropdown-toggle nav-link"
                      aria-expanded="false"
                      data-bs-toggle="dropdown"
                      href="#"
                    ></a>
                    <div
                      class="
                        dropdown-menu dropdown-menu-end dropdown-list
                        animated--grow-in
                      "
                    >
                      <h6 class="dropdown-header">alerts center</h6>
                      <a
                        class="dropdown-item d-flex align-items-center"
                        href="#"
                      >
                        <div class="me-3">
                          <div class="bg-primary icon-circle">
                            <i class="fas fa-file-alt text-white"></i>
                          </div>
                        </div>
                        <div>
                          <span class="small text-gray-500"
                            >December 12, 2019</span
                          >
                          <p>A new monthly report is ready to download!</p>
                        </div> </a
                      ><a
                        class="dropdown-item d-flex align-items-center"
                        href="#"
                      >
                        <div class="me-3">
                          <div class="bg-success icon-circle">
                            <i class="fas fa-donate text-white"></i>
                          </div>
                        </div>
                        <div>
                          <span class="small text-gray-500"
                            >December 7, 2019</span
                          >
                          <p>$290.29 has been deposited into your account!</p>
                        </div> </a
                      ><a
                        class="dropdown-item d-flex align-items-center"
                        href="#"
                      >
                        <div class="me-3">
                          <div class="bg-warning icon-circle">
                            <i
                              class="fas fa-exclamation-triangle text-white"
                            ></i>
                          </div>
                        </div>
                        <div>
                          <span class="small text-gray-500"
                            >December 2, 2019</span
                          >
                          <p>
                            Spending Alert: We've noticed unusually high
                            spending for your account.
                          </p>
                        </div> </a
                      ><a
                        class="dropdown-item text-center small text-gray-500"
                        href="#"
                        >Show All Alerts</a
                      >
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                  <div class="nav-item dropdown no-arrow">
                    <a
                      class="dropdown-toggle nav-link"
                      aria-expanded="false"
                      data-bs-toggle="dropdown"
                      href="#"
                    ></a>
                    <div
                      class="
                        dropdown-menu dropdown-menu-end dropdown-list
                        animated--grow-in
                      "
                    >
                      <h6 class="dropdown-header">alerts center</h6>
                      <a
                        class="dropdown-item d-flex align-items-center"
                        href="#"
                      >
                        <div class="dropdown-list-image me-3">
                          <img
                            class="rounded-circle"
                            src="assets/img/avatars/avatar4.jpeg"
                          />
                          <div class="bg-success status-indicator"></div>
                        </div>
                        <div class="fw-bold">
                          <div class="text-truncate">
                            <span
                              >Hi there! I am wondering if you can help me with
                              a problem I've been having.</span
                            >
                          </div>
                          <p class="small text-gray-500 mb-0">
                            Emily Fowler - 58m
                          </p>
                        </div> </a
                      ><a
                        class="dropdown-item d-flex align-items-center"
                        href="#"
                      >
                        <div class="dropdown-list-image me-3">
                          <img
                            class="rounded-circle"
                            src="assets/img/avatars/avatar2.jpeg"
                          />
                          <div class="status-indicator"></div>
                        </div>
                        <div class="fw-bold">
                          <div class="text-truncate">
                            <span
                              >I have the photos that you ordered last
                              month!</span
                            >
                          </div>
                          <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                        </div> </a
                      ><a
                        class="dropdown-item d-flex align-items-center"
                        href="#"
                      >
                        <div class="dropdown-list-image me-3">
                          <img
                            class="rounded-circle"
                            src="assets/img/avatars/avatar3.jpeg"
                          />
                          <div class="bg-warning status-indicator"></div>
                        </div>
                        <div class="fw-bold">
                          <div class="text-truncate">
                            <span
                              >Last month's report looks great, I am very happy
                              with the progress so far, keep up the good
                              work!</span
                            >
                          </div>
                          <p class="small text-gray-500 mb-0">
                            Morgan Alvarez - 2d
                          </p>
                        </div> </a
                      ><a
                        class="dropdown-item d-flex align-items-center"
                        href="#"
                      >
                        <div class="dropdown-list-image me-3">
                          <img
                            class="rounded-circle"
                            src="assets/img/avatars/avatar5.jpeg"
                          />
                          <div class="bg-success status-indicator"></div>
                        </div>
                        <div class="fw-bold">
                          <div class="text-truncate">
                            <span
                              >Am I a good boy? The reason I ask is because
                              someone told me that people say this to all dogs,
                              even if they aren't good...</span
                            >
                          </div>
                          <p class="small text-gray-500 mb-0">
                            Chicken the Dog · 2w
                          </p>
                        </div> </a
                      ><a
                        class="dropdown-item text-center small text-gray-500"
                        href="#"
                        >Show All Alerts</a
                      >
                    </div>
                  </div>
                  <div
                    class="shadow dropdown-list dropdown-menu dropdown-menu-end"
                    aria-labelledby="alertsDropdown"
                  ></div>
                </li>
                <div class="d-none d-sm-block topbar-divider"></div>
                <li class="nav-item dropdown no-arrow">
                  <div class="nav-item dropdown no-arrow">
                    <a
                      class="dropdown-toggle nav-link"
                      aria-expanded="false"
                      data-bs-toggle="dropdown"
                      href="#"
                    ></a>
                    <div
                      class="
                        dropdown-menu
                        shadow
                        dropdown-menu-end
                        animated--grow-in
                      "
                    >
                      <a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-user fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        >&nbsp;Profile</a
                      ><a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        >&nbsp;Settings</a
                      ><a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-list fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        >&nbsp;Activity log</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"
                        ><i
                          class="
                            fas
                            fa-sign-out-alt fa-sm fa-fw
                            me-2
                            text-gray-400
                          "
                        ></i
                        >&nbsp;Logout</a
                      >
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid">
            <h3 class="text-dark mb-4">Nhập sản lượng điện</h3>
            <div class="row mb-3">
              <div class="col" style="width: 9999999.552px; height: 740.333px">
                <div class="card shadow mb-3">
                  <div class="card-body">
                    <form method="post" action="nhaplieu.php">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="sanluongdien">
                              <strong>Sản lượng điện</strong>
                            </label>
                              <input
                              class="form-control"
                              type="number"
                              id="sanluongdien"
                              name="sanluongdien"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="first_name"
                              ><strong>Ngày tiêu thụ</strong><br /></label
                            ><input
                              class="form-control"
                              type="date"
                              id="ngaytieuthu"
                              name="ngaytieuthu"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <input class="btn btn-primary btn-lg" type="submit" name="nhapsld" value="Lưu"/>
                      </div>
                      <?php require 'xuly_nhapsld.php';?>
                    </form>

                  </div>
                </div>
              
              


                <?php
                //xử lý php 
                $result = mysqli_query($conn, 'select count(id) as total from sanluongdien');
                $row = mysqli_fetch_assoc($result);
                $total_records = $row['total'];

                //tìm limit và current page
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 20;

                // tính toán total page và start
                $total_page = ceil($total_records / $limit);

                // giới hạn current page trong khoảng 1 đến total page
                if ($current_page > $total_page) {
                  $current_page = $total_page;
                } else if ($current_page < 1) {
                  $current_page = 1;
                }                
                
                // Tim start
                $start = ($current_page - 1) * $limit;

                if (isset($_GET["search"]) && !empty($_GET["search"])) {
                  $key = $_GET["search"];
                  $query = "SELECT * FROM sanluongdien WHERE ngaytieuthu = '$key'";
                } else {
                  $query = "SELECT * FROM `sanluongdien` ORDER BY NgayTieuThu DESC LIMIT $start, $limit";
                }
                  $result = mysqli_query($conn, $query);
                ?>
                
                <div class="card card-shadow">
                  <div class="card-body">
                  <form action="" method="get">
                    <p><input class="form-control" type="date" name="search" value="<?php if (isset($_GET["search"])) { echo $_GET["search"]; } ?>"></p>
                    <input class="btn btn-primary" type="submit" value="Tìm">
                    <a href="/nhaplieu.php" class="btn btn-primary">Tất cả</a>
                  </form>
                  </div>
                </div>
                <p></p>
                <table class="table table-hover table-bordered bg-white">
                  <thead>
                    <tr>
                      <th scope="col">Ngày tiêu thụ</th>
                      <th scope="col">Sản lượng điện</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?> 
                    <tr>
                      <th>  
                        <?php
                          $date_tieuthu = date_create($row['ngaytieuthu']);
                          echo date_format($date_tieuthu,'d/m/Y');
                        ?>
                      </th>
                      <td>
                      <?php
                        echo $row['sanluong'];
                        echo ' kWh';
                      ?>
                      </td>
                      <td>
                        <a class="btn btn-danger" href="/xoa.php?id= <?php echo $row['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><i class="far fa-trash-alt"></i></a>
                      
                      </td>
                      <?php
                      }
                      ?>
                    </tr>
                  </tbody>
                </table>
                <nav aria-label="Page navigation example">
  <ul class="pagination">
              
                <li class="page-item 
                <?php 
                  if ($current_page > 1 && $total_page > 1) {
                  } else {
                    ?> disabled <?php
                  }
                ?>">
                <a class="page-link" href="nhaplieu.php?page=<?php echo $current_page-1; ?>">Trước</a></li>
              
              <?php
              
              // lập khoảng giữa
              for ($i = 1; $i <= $total_page; $i++) {
                if ($i == $current_page) {
                  echo '<li class="page-item active" aria-current="page"> <a class="page-link" href="#">'.$i.'</a></li>';
                } else {
                  echo '<li class="page-item"><a class="page-link" href="nhaplieu.php?page='.$i.'">'.$i.'</a></li>';
                }
              }
                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
              if ($current_page < $total_page && $total_page > 1){
                echo '<li class="page-item"><a class="page-link" href="nhaplieu.php?page='.($current_page+1).'">Next</a></li>';
              } else {
                echo '<li class="page-item disabled"><a class="page-link" href="nhaplieu.php?page='.($current_page+1).'">Next</a></li>';
              }
              ?>
                </ul>
              </nav>
  </body>
</html>
