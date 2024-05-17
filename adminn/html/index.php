<?php
// session_start();
// $conn = mysqli_connect("localhost", "root", "", "art_craft");
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// } else {
// }
?>
<?php
require '../../include/connection.php';

?>



<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Admin panel</title>

  <meta name="description" content="" />

  <!-- Favicon -->

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="apple-touch-icon" href="../assets/img/logo/brush.png" height="35px">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/brush.png">


  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="..assests/css/style.css" />



  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->
  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
            <a class="navbar-brand" href="index.php"><img class="brand-logo" alt="Footwear Shop" src="../assets/img/logo/brush.png" height="35px" width="35px" />

              <span class="app-brand-text demo menu-text fw-bold ms-1"> Art and Craft </span>

            </a>


        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item active open">
            <a href="index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Dashboard">Dashboard</div>
            </a>

          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="customer.php" class="menu-link ">
              <i class="menu-icon tf-icons bx bx-group"></i>
              <div data-i18n="Customer">Customer</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="category.php" class="menu-link ">
              <i class="menu-icon tf-icons bx bx-category"></i>
              <div data-i18n="Category">Category</div>
            </a>

          </li>
          <li class="menu-item">
            <a href="addproduct.php" class="menu-link ">
              <i class="menu-icon tf-icons  bx bx-store-alt"></i>
              <div data-i18n="Product">Product</div>
            </a>

          </li>
          <li class="menu-item">
            <a href="" class="menu-link ">
              <i class="menu-icon tf-icons bx bx-dock-bottom"></i>
              <div data-i18n="order">Order</div>
            </a>

          </li>

          <li class="menu-item">
            <a href="" class="menu-link">
              <i class="menu-icon tf-icons bx bx-layer"></i>
              <div data-i18n="Stock">Stock</div>
            </a>

          </li>
          <li class="menu-item">
            <a href="" class="menu-link ">
              <i class="menu-icon tf-icons bx bx-cube-alt"></i>
              <div data-i18n="Report">Report</div>
            </a>

          </li>


      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar ">
                    <img src="../assets/img/avatars/profile.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/profile.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <?php
                        $fetch = "SELECT name FROM tbluser WHERE role = 'admin'";
                        $result = mysqli_query($conn, $fetch);
                        $role = mysqli_fetch_array($result);

                        ?>



                        <div class="flex-grow-1">
                          <span class="fw-medium d-block"></span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"><?php echo  $role['name'];   ?></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>

                  <li>
                    <div class="dropdown-divider"></div>
                  </li>

                </ul>
              </li>
              <a class="dropdown-item" href="javascript:void(0);">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
              </a>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <br><br>
        <div class="app-content content">
          <div class="content-wrapper">
            <br>
            <div class="content-header row">
            </div>
            <div class="content-body">
              <div class="row">
                <?php

                $query1 = $conn->query('SELECT * From tbluser where role="customer"');
                $totalcust = mysqli_num_rows($query1);
                ?>

                <div class="col-xl-3 col-lg-6 col-md-12">
                  <a href="customer.php">
                    <div class="card pull-up ecom-card-1 bg-white">
                      <div class="card-content ecom-card2 height-180">
                        <h5 class="text-danger  p-2 font-large-1 text-center">Customers</h5>
                        <div>
                          <i class=" info font-large-2 float-right p-1 "></i>
                        </div>
                        <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                          <div>
                            <br>
                            <h1 class=" text-center p-2 font-large-2 bi bi-person text-danger"><?php echo $totalcust; ?></h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                  <a href="../admin/customer.php">
                    <div class="card pull-up ecom-card-1 bg-white">
                      <div class="card-content ecom-card2 height-180">
                        <h5 class="text-warning  p-2 font-large-1 text-center">Product</h5>
                        <div>
                          <i class="ft-user info font-large-2 float-right p-1"></i>
                        </div>
                        <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                          <div>
                            <br>
                            <h1 class="text-center text-warning  p-2 font-large-2 bi bi-shop"><?php echo $totalcust; ?></h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-3 col-lg-12">
                  <a href="../admin/order.php">
                    <div class="card pull-up ecom-card-1 bg-white">
                      <div class="card-content ecom-card2 height-180">
                        <h5 class="text-muted warning text-center p-2 font-large-1">Orders</h5>
                        <div>
                          <i class="ft-shopping-cart warning font-large-2 float-right p-1"></i>
                        </div>
                        <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                          <div>
                            <br>
                            <h1 class="text-center warning  p-2 font-large-2 bi bi-cart3"><?php echo $totalcust;  ?></h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                  <a href="../admin/stock.php">
                    <div class="card pull-up ecom-card-1 bg-white">
                      <div class="card-content ecom-card2 height-180">
                        <h5 class="text-info text-center p-2 font-large-1">Stocks</h5>
                        <div>
                          <i class="ft-box success  font-large-2 float-right p-1"></i>
                        </div>
                        <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                          <div>
                            <br>
                            <h1 class="text-center text-info  p-2 font-large-2 bi bi-stack"><?php echo $totalcust;  ?></h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Content -->






        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->

        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="../assets/vendor/js/menu.js"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- <script>
          var url = window.location.href;
          var activePage = url;
          alert(activePage)
          // aarange side bar menu
          $(document).ready(function() {

            //check for active menu for init
            var url = window.location.href;
            var activePage = url;
            alert(activePage)
            var found = false;
            $('.sidebar-menu li a').each(function() {
              var linkPage = this.href;
              alert(linkPage)
              if (linkPage.includes(activePage)) {
                found = true;
                alert("Hello")
                $(this).closest("li").addClass("active");
                if ($(this).closest("li").parent().hasClass('menu-sub')) {
                  $(this).closest("li").parent().parent().addClass("open");
                  $(this).closest("li").parent().parent().addClass("active");
                }
              }
            });

            if (!found) {
              $('.sidebar-menu li').eq(0).addClass("active");
            }

            //on click for ajax page
            $('.sidebar-menu li a').click(function() {
              if (!$(this).hasClass('menu-toggle')) {

                $('.sidebar-menu li').removeClass("active");
                $(this).closest("li").addClass("active");

                if ($(this).closest("li").parent().hasClass('menu-sub')) {
                  $(this).closest("li").parent().parent().addClass("open");
                  $(this).closest("li").parent().parent().addClass("active");
                }
              }
            });

          });
        </script> -->
        <script>
          $(document).ready(function() {
            // Get the current URL
            var currentURL = window.location.href;

            // Function to mark the active menu item
            function setActiveMenuItem() {
              // Remove active class from all menu items
              $('.sidebar-menu li').removeClass('active');

              // Find the menu item that matches the current URL
              var activeItem = $('.sidebar-menu li a').filter(function() {
                return currentURL.includes(this.href);
              }).closest('li');

              // Add 'active' class to the closest menu item
              activeItem.addClass('active');

              // Expand the parent menu if it's a submenu
              if (activeItem.closest('.menu-sub').length) {
                activeItem.closest('.menu-sub').addClass('open');
                activeItem.closest('.menu-sub').addClass('active');
              }
            }

            // Set the active menu item when the page loads
            setActiveMenuItem();

            // Handle click events for menu items
            $('.sidebar-menu li a').on('click', function() {
              // Check if it's a submenu toggle
              if (!$(this).hasClass('menu-toggle')) {
                setActiveMenuItem();
              }
            });
          });
        </script>
</body>

</html>