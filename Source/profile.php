<?php
include("db.php");
include("function.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
            <h3 class="text-dark mb-4">Hồ sơ hệ thống</h3>
            <div class="row mb-3">
              <div class="col" style="width: 9999999.552px; height: 740.333px">
                <div class="card shadow mb-3">
                  <div class="card-header py-3"></div>
                  <div class="card-body">
                    <form>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="username"
                              ><strong>Tên hệ thống</strong></label
                            ><input
                              class="form-control"
                              type="text"
                              id="name"
                              placeholder="user.name"
                              name="username"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="first_name"
                              ><strong>Vị trí hệ thống</strong><br /></label
                            ><input
                              class="form-control"
                              type="text"
                              id="street"
                              placeholder="Nguyễn Thị Minh Khai"
                              name="street"
                            /><input
                              class="form-control"
                              type="text"
                              id="City"
                              placeholder="Thủ Dầu Một"
                              name="Thành Phố/Huyện"
                            /><input
                              class="form-control"
                              type="text"
                              id="province"
                              placeholder="Bình Dương"
                              name="Tỉnh"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <button class="btn btn-primary btn-sm" type="submit">
                          Save Settings
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card shadow">
                  <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Chủ dầu tư</p>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="mb-3">
                        <label class="form-label" for="address"
                          ><strong>Tên chủ đầu tư</strong><br /></label
                        ><input
                          class="form-control"
                          type="text"
                          id="address"
                          placeholder="Nhật Trường"
                          name="Tên"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="address"
                          ><strong>Địa chỉ liên lạc</strong><br /></label
                        ><input
                          class="form-control"
                          type="text"
                          id="address-1"
                          placeholder="số 70 Bùi Thị Xuân"
                          name="Địa chỉ"
                        />
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="city"
                              ><strong>Thành phố/huyện</strong></label
                            ><input
                              class="form-control"
                              type="text"
                              id="city"
                              placeholder="Thủ Dầu Một"
                              name="city"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="country"
                              ><strong>Tỉnh</strong><br /></label
                            ><input
                              class="form-control"
                              type="text"
                              id="country"
                              placeholder="Bình Dương"
                              name="country"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <button class="btn btn-primary btn-sm" type="submit">
                          Save&nbsp;Settings
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <p></p>
                <div class="row mb-3">
              <div class="col" style="width: 9999999.552px; height: 740.333px">
                <div class="card shadow mb-3"><div id="nhapvattu"></div>
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Vật tư</p>
                  </div>
                  <div class="card-body">
                    <form method="post" action="profile.php">
                      <div class="row">
                        <div class="col">
                        <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="tenvattu">
                              <strong>Tên vật tư</strong>
                            </label>
                              <input class="form-control" type="text" id="tenvattu" name="tenvattu" required/>
                          </div>
                        </div>
                      </div>
                        </div>
                     <div class="col">
                     <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="donvi">
                              <strong>Đơn vị</strong>
                            </label>
                              <select class="form-select" id="donvi" name="donvi">
                              <option value="Tấm" selected>Tấm</option>
                              <option value="Bộ">Bộ</option>
                              <option value="Cặp">Cặp</option>
                              <option value="Cái">Cái</option>
                              <option value="Mét">Mét</option>
                              </select>                          
                          </div>
                        </div>
                      </div>
                     </div>
                     <div class="col">
                     <div class="row">
                            <div class="col">
                              <div class="mb-3">
                                <label class="form-label" for="soluong">
                                  <strong>Số lượng</strong>
                                </label>
                                  <input class="form-control" type="number" id="soluong" name="soluong" required/>
                              </div>
                            </div>
                          </div>
                     </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="row">
                            <div class="col">
                              <div class="mb-3">
                                <label class="form-label" for="duphong">
                                <strong>Dự phòngs</strong>
                                </label>
                                <input class="form-control" type="number" id="duphong" name="duphong" required/>
                              </div>
                            </div>  
                          </div>                        </div>

                          <div class="col">
                            <div class="row">
                              <div class="col">
                                <div class="mb-3">
                                  <label class="form-label" for="tongkhoiluong">
                                  <strong>Tổng khối lượng</strong>
                                  </label>
                                  <input class="form-control" type="number" id="tongkhoiluong" name="tongkhoiluong" />
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col">
                        <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="dongia">
                              <strong>Đơn giá</strong>
                            </label>
                              <input class="form-control" type="number" id="dongia" name="dongia" required/>
                          </div>
                        </div>
                      </div>
                        </div>
                        <div class="col">
                        <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="tonggiatri">
                              <strong>Tổng giá trị</strong>
                            </label>
                              <input class="form-control" type="number" id="tonggiatri" name="tonggiatri" />
                          </div>
                        </div>
                      </div>
                        </div>
                        <div class="col">
                        <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="ghichu">
                              <strong>Ghi chú</strong>
                            </label>
                              <input class="form-control" type="text" id="ghichu" name="ghichu"/>
                          </div>
                        </div>
                      </div>
                        </div>
                      </div>                   
                      
                      <div class="mb-3">
                        <input class="btn btn-primary btn-lg" type="submit" name="nhapvt" value="Lưu"/>
                      </div>
                      <?php require 'xuly_nhapvattu.php';?>

                    </form>

                  </div>
                </div>
                
        <?php
               

                $query = "SELECT * FROM `khoiluong_vattu` ORDER BY id ASC";
                $result = mysqli_query($conn, $query);
                ?>
              
                <p></p>
                <table class="table table-hover table-bordered bg-white">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Tên vật tư</th>
                      <th scope="col">Đơn vị</th>
                      <th scope="col">Số lượng</th>
                      <th scope="col">Dự phòng 5%</th>
                      <th scope="col">Tổng khối lượng</th>
                      <th scope="col">Đơn giá</th>
                      <th scope="col">Tổng giá trị</th>
                      <th scope="col">Ghi chú</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?> 
                    <tr>
                      <th>  
                        <?php
                          echo $i;
                        ?>
                      </th>
                      <td>
                      <?php
                        echo $row['tenvattu'];
                      ?>
                      </td>
                      <td>
                      <?php
                        echo $row['donvi'];
                      ?>
                      </td>
                      <td>
                      <?php
                        echo currency_format($row['soluong']);
                      ?>
                      </td>
                      <td>
                      <?php
                        echo currency_format($row['duphong']);
                      ?>
                      </td>
                      <td>
                      <?php
                        echo currency_format($row['tongkhoiluong']);
                      ?>
                      </td>
                      <td>
                      <?php
                        echo currency_format($row['dongia']);
                      ?>
                      </td>
                      <td>
                      <?php
                        echo currency_format($row['tongdongia']);
                      ?>
                      </td>
                      <td>
                      <?php
                        echo $row['ghichu'];
                      ?>
                      </td>
                      <td>
                          <a href='/xoavattu.php?id=<?php echo $row["ID"]; ?>' class='btn btn-danger'  onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><i class="far fa-trash-alt"></i></a>
                    </td>
                      <?php
                      $i++;
                      }
                      ?>
                    </tr>


                    <?php 
                      //tính vật tư phụ
                      $query = "SELECT * FROM `khoiluong_vattu`";
                      $result = mysqli_query($conn, $query);
                      $tonggiatri = 0;
                      while ($row = mysqli_fetch_assoc($result)) {
                        $tonggiatri = $tonggiatri + $row['tongdongia'];
                      }
                      $vattuphu = ($tonggiatri * 10) / 100;
                      //tính nhân công và bảo hiểm công trình
                      $ncvabh = ($tonggiatri * 20) / 100;
                      $tongklct = $tonggiatri + $vattuphu + $ncvabh;
?>
                    <tr>
                    <td></td>
                    <td><b>Vật tư phụ</b></td>
                    <td>Bộ</td>
                    <td style="border-right: none;"></td>
                    <td style="border-left:none; border-right: none;"></td>
                    <td style="border-left:none; border-right: none;"></td>
                    <td style="border-left:none;"></td>
                    <td><?php echo currency_format($vattuphu); ?></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><b>Nhân công và bảo hiểm công trình</b></td>
                    <td>Bộ</td>
                    <td style="border-right: none;"></td>
                    <td style="border-left:none; border-right: none;"></td>
                    <td style="border-left:none; border-right: none;"></td>
                    <td style="border-left:none;"></td>
                    <td><?php echo currency_format($ncvabh); ?></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><b>Tổng khối lượng công trình</b></td>
                    <td style="border-left:none; border-right: none;"></td>
                    <td style="border-left:none; border-right: none;"></td>
                    <td style="border-left:none; border-right: none;"></td>
                    <td style="border-left:none; border-right: none;"></td>
                    <td style="border-left:none;"></td>
                    <td><?php echo currency_format($tongklct); ?></td>
                    <td></td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
              
            </div>
          </div>
        
              
        </div>
        

      </div>

      
      <a class="border rounded d-inline scroll-to-top" href="#page-top"
        ><i class="fas fa-angle-up"></i
      ></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script>
        $( "#soluong" ).focusout(function() {
            $( "#tongkhoiluong" ).attr("value", function() {
              var duphongvalue = Number($("#duphong").val())
              var soluongvalue = Number($("#soluong").val())

              return duphongvalue + soluongvalue
            });
        })
        $( "#duphong" ).focusout(function() {
            $( "#tongkhoiluong" ).attr("value", function() {
              var duphongvalue = Number($("#duphong").val())
              var soluongvalue = Number($("#soluong").val())

              return duphongvalue + soluongvalue
            });
        })

        $( "#dongia" ).focusout(function() {
            $( "#tonggiatri" ).attr("value", function() {
              var tongkhoiluongvalue = Number($("#tongkhoiluong").val())
              var dongiavalue = Number($("#dongia").val())

              return tongkhoiluongvalue * dongiavalue
            });
        })
    </script>
  </body>
</html>
