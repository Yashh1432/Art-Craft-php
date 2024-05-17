<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "art_craft");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
}
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
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

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
                        <a href="index.php" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div>Dashboard</div>
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
                        <a href="" class="menu-link ">
                            <i class="menu-icon tf-icons  bx bx-store-alt"></i>
                            <div data-i18n="Product">Product</div>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-dock-bottom"></i>
                            <div data-i18n="order">order</div>
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
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
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




                <!-- / tables -->

                <br>
                <br>
                <div class="wrapper wrapper-content animated fadeInRight m-lg-5">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox">

                                <div class="ibox-content">
                                    <table class="table table-bordered mg-b-0">
                                        <h1 class="text-center">Customer Details</h1>
                                        <br>
                                        <thead class=" bg-dark text-light">
                                            <tr class="text-light">
                                                <th class="text-light">S.NO</th>
                                                <th class="text-light"> Name</th>
                                                <th class="text-light">email</th>
                                                <th class="text-light">Mobile Number</th>
                                                <th class="text-light">gender</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $query = $conn->query("SELECT * FROM `tbluser` where role='customer'");
                                        $cnt = 1;

                                        ?>
                                        <tbody>
                                            <?php
                                            while ($fetch = $query->fetch_array()) {
                                                // if ($result->num_rows > 0) {
                                                //     $row = $result->fetch_assoc();
                                                //     $Cname = $row['name'];
                                                // }
                                            ?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $fetch['name']; ?></td>
                                                    <td><?php echo $fetch['email']; ?></td>
                                                    <td><?php echo $fetch['contact']; ?></td>
                                                    <td><?php echo $fetch['gender']; ?></td>
                                                    <td>

                                                        <a href="#" class="table-link danger p-4">
                                                            <span class="fa-stack">
                                                                <i class="bi bi-trash3-fill text-danger "></i>
                                                            </span>
                                                        </a>
                                                    </td>

                                                </tr>
                                            <?php
                                                $cnt = $cnt + 1;
                                            }
                                            ?>


                                        </tbody>
                                    </table>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>





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